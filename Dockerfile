FROM php:8.3.6-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

RUN apt-get update
RUN apt install -y apt-utils

# Install dependencies
RUN apt-get install -qq -y \
  curl \
  git \
  libzip-dev \
  zlib1g-dev \
  zip unzip

RUN apt install -y libmcrypt-dev libicu-dev libxml2-dev
RUN apt-get install -y libjpeg-dev libpng-dev libfreetype6-dev libjpeg62-turbo-dev
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd

RUN apt install -y libmagickwand-dev --no-install-recommends && \
  pecl install imagick && docker-php-ext-enable imagick

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install \
  bcmath \
  pdo_mysql \
  pcntl \
  zip \
  pdo \
  ctype \
  fileinfo \
  xml \
  intl

# Install composer
COPY --from=composer:2.7.4 /usr/bin/composer /usr/bin/composer

# Set the default shell to bash
RUN rm /bin/sh && ln -s /bin/bash /bin/sh

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# RUN chown -R www-data:www-data /var/www
# RUN chmod -R 755 /var/www/storage

# Install NPM and node
ENV NODE_VERSION=21.7.3
ENV NVM_DIR=/home/$user/.nvm

RUN mkdir -p $NVM_DIR

RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | bash
RUN . "$NVM_DIR/nvm.sh" && nvm install ${NODE_VERSION}
RUN . "$NVM_DIR/nvm.sh" && nvm use v${NODE_VERSION}
RUN . "$NVM_DIR/nvm.sh" && nvm alias default v${NODE_VERSION}
ENV PATH="/home/$user/.nvm/versions/node/v${NODE_VERSION}/bin/:${PATH}"

WORKDIR /var/www

COPY . .

# Set the user
USER $user

CMD php-fpm


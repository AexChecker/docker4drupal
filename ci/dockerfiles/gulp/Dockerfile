FROM ubuntu:16.04

MAINTAINER Oleksiy Kalinichenko "AexChecker@gmail.com"

ENV PATH $PATH:/nodejs/bin

RUN \
  apt-get update -y && apt-get upgrade -y \
  && \
  apt-get install --no-install-recommends -y -q \
    curl \
    python \
    build-essential \
    git \
    ca-certificates \
    libfreetype6 \
    libfreetype6-dev \
    libfontconfig1 \
    libfontconfig1-dev \
    ruby \
    ruby-dev \
    locales \
    libpng-dev \
    zip unzip tar \
  && \
    echo "en_US UTF-8" >> /etc/locale.gen && \
    dpkg-reconfigure locales && \
    locale-gen en_US.UTF-8 && \
    localedef -c -i en_US -f UTF-8 en_US.UTF-8 \
  && \
    mkdir -p /nodejs && \
    curl https://nodejs.org/dist/v4.4.3/node-v4.4.3-linux-x64.tar.gz | tar xvzf - -C /nodejs --strip-components=1 \
  && \
    gem install sass compass && \
    npm install -g bower@1.8.0 gulp@3.9.1 \
  && apt-get autoremove \
  && apt-get clean \
  && rm -r /var/lib/apt/lists/*

WORKDIR /app

COPY docker-entrypoint /usr/local/bin/
CMD docker-entrypoint

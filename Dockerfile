FROM quay.io/continuouspipe/symfony-flex:latest
ARG APP_ENV
ARG APP_DEBUG
ARG APP_SECRET
ARG DATABASE_URL
COPY . /app/
WORKDIR /app
RUN container build


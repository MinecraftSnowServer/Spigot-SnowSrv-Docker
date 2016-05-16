#!/usr/bin/env bash
git submodule init
git submodule update
COMPOSE_HTTP_TIMEOUT=3600 docker-compose up -d
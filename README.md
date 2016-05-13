Snow's Minecraft Server all in one docker pack
-----

雪服架設懶人包


## Setup

```bash
git clone https://github.com/MinecraftSnowServer/Server-Docker.git MinecraftServer
cd MinecraftServer
git submodule init
git submodule update

# Edit environment variables in docker-compose.yml

COMPOSE_HTTP_TIMEOUT=3600 docker-compose up -d
```

## Server

- Spigot 1.8.8

## Plugins

| Name                      | Version           | Usage |
| ------------------------- | ----------------- | ----- |
| AdminCmd                  | 8.0.0-SNAPSHOT    |       |
| AuthMe                    | 5.2-Beta2         |       |
| ChatEx                    | 1.3.0             |       |
| ClearLag                  | 2.9.1             |       |
| Dynmap                    | 2.2               |       |
| Dynmap-WorldGuard         | 0.80              |       |
| HeadDrops                 | 2.0               |       |
| Lift                      | 52                |       |
| Lockette                  | 1.8.21            |       |
| Multiverse-Core           | 2.5               |       |
| Multiverse-NetherPortals  | 2.5               |       |
| Multiverse-Portals        | 2.5               |       |
| Multiverse-SignPortals    | 2.5               |       |
| PermissionEx              | 1.23.3            |       |
| WorldEdit                 | 6.1               |       |
| WorldGuard                | 6.1               |       |

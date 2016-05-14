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

| Name                      | Version           | Usage                     |
| ------------------------- | ----------------- | ------------------------- |
| AdminCmd                  | 8.0.0-SNAPSHOT    | Useful Commands collection|
| AuthMe                    | 5.2-Beta2         | User validation           |
| ChatEx                    | 1.3.0             | Chat feature improvement  |
| ClearLag                  | 2.9.1             | Prevent too many entities |
| Dynmap                    | 2.2               | Web map                   |
| Dynmap-WorldGuard         | 0.80              | Web map extension         |
| HeadDrops                 | 2.0               | All mods dead with head   |
| Lift                      | 52                | Elevator   				|
| Lockette                  | 1.8.21            | Box lock                  |
| Multiverse-Core           | 2.5               | Multiverse	        	|
| Multiverse-NetherPortals  | 2.5               | Multiverse	        	|
| Multiverse-Portals        | 2.5               | Multiverse	        	|
| Multiverse-SignPortals    | 2.5               | Multiverse	        	|
| PermissionEx              | 1.23.3            | Permission management		|
| Slack                     | 1.5               | Sync messages with Slack  |
| TreeLogging               | 0.3.2             | Logging with easy way     |
| WorldEdit                 | 6.1               | Powerful bulding tool     |
| WorldGuard                | 6.1               | Region manager 			|

### Incompatible

## Plugins

| Name                      | Version           | Usage                     |
| ------------------------- | ----------------- | ------------------------- |
| BKCommonLib               | v1.59             | Dependency of TrainCarts  |
| TrainCarts                | v1.73.0           | Make carts more intrest	|
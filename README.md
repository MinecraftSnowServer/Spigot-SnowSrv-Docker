Snow's Minecraft Server all in one docker pack
-----

雪服架設懶人包，目前整合有：

- Spigot 1.8.8
- 雪服有在用的 Bukkit Plugins （詳見下表）
- 雪服的帳號管理系統

主要是利用 Docker 協助伺服器的一令架設，並且保持資料與伺服器程式與環境分離的機制，讓使用這個專案架設 Spigot 伺服器的開發者可以方便昇級、遷移自己的伺服器版本、環境與資料。

也順便練習一下 Docker 和 Minecraft 伺服器架設囉。

## Setup

請先在您的伺服器上安裝好 git、Docker 和 Docker-Compose。

```bash
git clone https://github.com/MinecraftSnowServer/Server-Docker.git MinecraftServer
cd MinecraftServer
git submodule init
git submodule update

# Edit environment variables in docker-compose.yml
# 編輯在 docker-compose.yml 中的環境變數。

COMPOSE_HTTP_TIMEOUT=3600 docker-compose up -d
```

您可以依照上面的腳本說明去操作或是在編輯完環境變數後直接執行 `setup.sh`。

第一次架設會耗費些許時間在下載伺服器檔案，請耐心等待。

架設好後，請先到帳號管理系統（PWD）註冊帳號，第一個註冊帳號的人會直接獲得管理權限。目前帳號管理系統的群組尚未與遊戲綁定，請特別留意。

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
| SimpleSort				| 1.4 				| Sort inventory & chest    |
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

# License

本專案採用 MIT 授權條款，僅包含本專案所寫腳本，不包括 Bukkit 插件本身、Git Submodule 專案、執行後下載的任何資料或執行檔。

若要架設 Mincraft 伺服器，請使用正版的帳號與客戶端（Client），並且遵守 [EULA 條款 (MINECRAFT 使用者授權合約)](https://account.mojang.com/documents/minecraft_eula) 。
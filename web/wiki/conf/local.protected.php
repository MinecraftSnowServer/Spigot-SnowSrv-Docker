<?php
// MySQL + Minecraft backend
$conf['superuser']          = getenv('DOKU_SUPERUSER_ID');
$conf['openregister']       = 1;
$conf['forwardClearPass']   = 0;
$conf['useacl']             = 1;
$conf['defaultgroup']       = 'user';
$conf['authtype']           = 'authminecraft';
$conf['auth']['minecraft']  = [
    'debug'         => 1,
    'server'        => getenv('DOKU_AUTH_DB_HOSTNAME'),
    'user'          => getenv('DOKU_AUTH_DB_USERNAME'),
    'password'      => getenv('DOKU_AUTH_DB_PASSWORD'),
    'database'      => getenv('DOKU_AUTH_DB_DATABASE'),

    # User Index
    'getUsers'      => "SELECT DISTINCT username AS user
                        FROM authme AS u
                        LEFT JOIN usergroup AS ug ON u.uid=ug.uid
                        LEFT JOIN groups AS g ON ug.gid=g.gid",
    # User CREATE
    'addUser'       => "INSERT INTO authme
                        (username, password, email, nick)
                        VALUES ('%{user}', '%{pass}', '%{email}',
                        '%{name}')",

    # User READ
    'getUserID'     => "SELECT uid AS id
                        FROM authme
                        WHERE username='%{user}'",
    'getUserInfo'   => "SELECT password, nick AS name, email AS mail
                        FROM authme
                        WHERE username='%{user}'",
    'checkPass'     => "SELECT password FROM authme WHERE username='%{user}'",

    # User UPDATE
    'updateUser'    => "UPDATE authme SET",
    'UpdateLogin'   => "username='%{user}'",
    'UpdatePass'    => "password='%{pass}'",
    'UpdateEmail'   => "email='%{email}'",
    'UpdateName'    => "nick='%{name}'",
    'UpdateTarget'  => "WHERE uid=%{uid}",


    # User DELETE
    'delUser'       => "DELETE FROM authme
                        WHERE uid='%{uid}'",

    # Group Index
    'getGroups'     => "SELECT name as `group`
                        FROM groups g, authme u, usergroup ug
                        WHERE u.uid = ug.uid
                        AND g.gid = ug.gid
                        AND u.username='%{user}'",

    # Group CREATE
    'addGroup'      => "INSERT INTO groups (name)
                        VALUES ('%{group}')",
    # Group READ
    'getGroupID'    => "SELECT gid AS id
                        FROM groups
                        WHERE name='%{group}'",

    # Group UPDATE
    # None

    # Group DELETE
    'delGroup'      => "DELETE FROM groups
                        WHERE gid='%{gid}'",

    # User-Group
    'delUserRefs'   => "DELETE FROM usergroup
                        WHERE uid='%{uid}'",
    'addUserGroup'  => "INSERT INTO usergroup (uid, gid)
                        VALUES ('%{uid}', '%{gid}')",
    'delUserGroup'  => "DELETE FROM usergroup
                        WHERE uid='%{uid}'
                        AND gid='%{gid}'",

    # Filters
    'FilterLogin'   => "u.username LIKE '%{user}'",
    'FilterName'    => "u.nick LIKE '%{name}'",
    'FilterEmail'   => "u.email LIKE '%{email}'",
    'FilterGroup'   => "g.name LIKE '%{group}'",
    'SortOrder'     => "ORDER BY username",
];
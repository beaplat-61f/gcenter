# gcenter
## 安装方法
### 1.克隆到本地
    git clone https://github.com/beaplat-61f/gcenter.git
### 2.配置数据库
进入 `Application/Common/Conf` 目录，编辑 `config.php` 文件，修改如下
    /* 数据库配置 */
    'DB_TYPE'   => 'mysqli', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'onethink', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'onethink_', // 数据库表前缀



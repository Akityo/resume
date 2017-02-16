<!DOCTYPE html>
<html>
<?php

$passwd = "ZMKM"; // 页面访问授权码

if (!empty($_POST['text'])){
    if ($_POST['text'] == $passwd){
        html_head_("某某某的简历");
        html_body("ZMOM1031","18800000000");
    } elseif (($_POST['text'] == "admin") || ($_POST['text'] == "password")){
        html_head("Fuck Your!");
        pass_input("罪与罚！");
        /* attack(); */
    } else {
        html_head("Welcome");
        pass_input("访问码错误！或者您的访问码已过期。（请注意大小写）");
    }
} else {
    html_head("Welcome");
    pass_input();
}

function html_body($name,$call){
    print <<<END
<body>
    <aside>
        <ul>
            <li>
                <a href="https://github.com/ZMOM1031/resume" target="_blank">源代码</a>
            </li>
            <!--
            <li>
                <a href="某某工程师-某某某.pdf" target="_blank">PDF 下载</a>
            </li>
            -->
            <li>
                <a href="https://blog.iternull.com" target="_blank">Blog</a>
            </li>
            <li>
                <a href="https://www.github.com/ZMOM1031" target="_blank">GitHub</a>
            </li>
        </ul>
    </aside>
    <div class="container">
        <div class="sidebar">
            <div class="title">
                <img src="img/head.png">
                <h1><span>$name</span>的简历</h1>
                <h2>"Write the Code. Change the World."</h2>
            </div>
            <ul class="side-info">
                <li class="someRight">
                    <dt><i class="icon-bookmark"></i>Contact. 联系方式</dt>
                    <dd><i class="icon-qq"></i>QQ: <a href="http://wpa.qq.com/msgrd?v=3&uin=**********&site=qq&menu=yes" target="_blank">**********</a></dd>
                    <dd><i class="icon-wechat"></i>微信: **********</dd>
                    <dd><i class="icon-phone-1"></i>电话: $call</dd>
                    <dd><i class="icon-mail-alt"></i>邮箱: <a href="mailto:**********@email.com" target="_blank">**********</a></dd>
                </li>
                <li class="someRight">
                    <dt><i class="icon-bookmark"></i>Application. 应聘岗位</dt>
                    <dd>某某工程师</dd>
                </li>
                <li class="skill">
                    <dt><i class="icon-bookmark"></i>Tech. 技能点</dt>
                    <dd>
                        <div class="skill-name">C</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="width: 70%"></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="skill-name">Java</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="width: 70%"></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="skill-name">Python</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="width: 75%"></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="skill-name">PHP</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="width: 60%"></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="skill-name">JavaScript</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="width: 65%"></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="skill-name">HTML</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="width: 70%"></div>
                        </div>
                    </dd>
                    <dd>
                        <div class="skill-name">CSS</div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="width: 65%"></div>
                        </div>
                    </dd>
                </li>
                <li class="someRight" id="hobby">
                    <dt><i class="icon-bookmark"></i>Hobby. 兴趣爱好</dt>
                    <dd>标签、标签、标签、标签、</dd>
                    <dd>标签、标签、标签 ......</dd>
                </li>
            </ul>
            <div class="note">
                <p>自我介绍。内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                <br />
                <p>自我介绍。内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                <br />
                <p>自我介绍。内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                <br />
            </div>
        </div>
        <div class="main">
            <ul class="main-info">
                <li class="someRight">
                    <dt><i class="icon-bookmark"></i>Basic info. 基本信息</dt>
                    <dd><span>个人信息: </span>$name / 男 / **岁</dd>
                    <dd><span>学历文凭: </span>本科 / 某某大学</dd>
                    <dd><span>居住地址: </span>某某省 某某市 某某区 某某街道 某某号</dd>
                    <dd><span>Blog: </span><a href="https://blog.iternull.com" target="_blank">blog.iternull.com</a></dd>
                    <dd><span>GitHub: </span><a href="https://www.github.com/ZMOM1031" target="_blank">ZMOM1031</a></dd>
                </li>
                <li>
                    <dt><i class="icon-bookmark"></i>Skill. 技能清单</dt>
                    <h3>示例</h3>
                    <ul class="exp">
                        <li>
                            <div class="circle"></div>
                            <h4>示例</h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                    </ul>
                    <h3>示例</h3>
                    <ul class="exp">
                        <li>
                            <div class="circle"></div>
                            <h4>示例</h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>示例</h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                    </ul>
                    <h3>示例</h3>
                    <ul class="exp">
                        <li>
                            <div class="circle"></div>
                            <h4>示例</h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>示例</h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>示例</h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <dt><i class="icon-bookmark"></i>Experience. 项目与工作经验</dt>
                    <h3>某某公司（2016.01 - 2016.12）</h3>
                    <ul class="exp">
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                    </ul>
                    <h3>某某公司（2017.01 - 至今）</h3>
                    <ul class="exp">
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <img src="img/example.png">
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <img src="img/example.png">
                        </li>
                    </ul>
                    <h3>个人项目</h3>
                    <ul class="exp">
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <img src="img/example.png">
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <img src="img/example.png">
                        </li>
                        <li>
                            <div class="circle"></div>
                            <h4>
                                示例
                                <a href="https://www.example.com/" target="_blank"><i class="icon-link"></i>链接</a>
                            </h4>
                            <p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                            <img src="img/example.png">
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <footer>
        <p>Made with <i class="icon-heart throb" style="color: #d43f57;"></i> by ZMOM1031. 最后更新于 2017.02.10</p>
    </footer>
</body>\n
END;
}

function html_head($title){
    print <<<END
<head>
    <meta charset="UTF-8">
    <title>$title</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/signin.min.css">
    <script type="text/javascript">
    var httpsRE = /^https/i;
    if (!window.location.origin.match(httpsRE)){
        window.location = "https://" + window.location.hostname + window.location.pathname + window.location.search;
    }
    </script>
</head>\n
END;
}

function html_head_($title){
    print <<<END
<head>
    <meta charset="UTF-8">
    <title>$title</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="dist/css/style.min.css">
    <link rel="stylesheet" href="dist/css/fontello.min.css">
    <script type="text/javascript">
    var httpsRE = /^https/i;
    if (!window.location.origin.match(httpsRE)){
        window.location = "https://" + window.location.hostname + window.location.pathname + window.location.search;
    }
    </script>
</head>\n
END;
}

function pass_input($error_info){
    print <<<END
<body>
    <div class="container">
        <form class="form-signin" action='' method='post'>
            <h2 class="form-signin-heading text-center">Welcome</h2>
            <input class="form-control" type='password' name='text' placeholder="访问授权码">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Open</button>
        </form>
        <p class="text-center">$error_info</p>
    </div>
</body>\n
END;
}

function pass_error(){
    echo "访问码错误！或者您的访问码已过期。（请注意大小写）";
}

?>
</html>

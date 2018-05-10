<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style/main_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <title>STADI</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/image/logo_stadi.png">
</head>
<body>
    <!-- header start -->
    <div class="header">
        <div class="ui secondary pointing menu">
            <img class="logo" src="<?php echo base_url(); ?>assets/image/logo_stadi.png">
            <a class="active item">
                Home
            </a>
            <div class="ui dropdown dropdown-style">
                <div class="text">Category</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">New</div>
                    <div class="item">
                        <span class="description">ctrl + o</span>
                            Open...
                    </div>
                    <div class="item">
                        <span class="description">ctrl + s</span>
                            Save as...
                    </div>
                    <div class="item">
                        <span class="description">ctrl + r</span>
                            Rename
                    </div>
                    <div class="item">Make a copy</div>
                    <div class="item">
                        <i class="folder icon"></i>
                        Move to folder
                    </div>
                    <div class="item">
                        <i class="trash icon"></i>
                        Move to trash
                    </div>
                    <div class="divider"></div>
                    <div class="item">Download As...</div>
                    <div class="item">
                        <i class="dropdown icon"></i>
                        Publish To Web
                    <div class="menu">
                        <div class="item">Google Docs</div>
                        <div class="item">Google Drive</div>
                        <div class="item">Dropbox</div>
                        <div class="item">Adobe Creative Cloud</div>
                        <div class="item">Private FTP</div>
                        <div class="item">Another Service...</div>
                    </div>
                </div>
                <div class="item">E-mail Collaborators</div>
            </div>
        </div>
            
        <a class="item">
            Messages
        </a>
        <a class="item">
            Friends
        </a>
        <div class="right menu">
            <div class="item">
                <div class="ui icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
            </div>
            <a class="ui item">
                Logout
            </a>
        </div>
    </div>
</div>
    <!-- header end -->
</body>
</html>
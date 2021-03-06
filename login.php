
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Login Example - Semantic</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
    <style type="text/css">
        body {
            background-color: #DADADA;
        }

        body>.grid {
            height: 100%;
        }

        .image {
            margin-top: -100px;
        }

        .column {
            max-width: 450px;
        }
    </style>
    <script>
    // semantic UI verify
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier: 'id',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your e-mail or account!'
                                    }
                                ]
                            },
                            password: {
                                identifier: 'pw',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your password!'
                                    },
                                    {
                                        type: 'length[4]',
                                        prompt: 'Your password must be at least 4 characters'
                                    }
                                ]
                            }
                        }
                    });
            });
    </script>
</head>

<body>

    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui teal image header">
<!--                <img src="assets/images/logo.png" class="image">-->
                <div class="content">
                    Log-in to your account
                </div>
            </h2>
            <form class="ui large form" name="form" method="post" action="connect.php">
                <div class="ui stacked segment">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="id" placeholder="E-mail or Account">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="pw" placeholder="Password">
                        </div>
                    </div>
                    <button class="ui fluid large teal submit button" type="submit">Login</button>
                </div>

                <div class="ui error message"></div>

            </form>

            <div class="ui message">
                New to us? <a href="register.php">Sign Up</a>
            </div>
        </div>
    </div>

</body>

</html>

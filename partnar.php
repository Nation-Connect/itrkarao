<html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ITRKARAO Services: India's Leading CA Services Platform </title>

    <link rel="canonical" href="../index.php">
    <?php
    include 'head.php';
    ?>

<body>
    <div id="tawkchat-status-text-container" class="theme-background-color theme-text-color" style="background-color:blue"><span id="maximizeChat" class="icon-mail appear" title="Maximize"></span><span id="minimizeChatMinifiedBtn" class="icon-close hide" title="Minimize"></span></div>
    <div class="header">
        <div class="header-top" style="padding: 5px;">
            <div class="container">
                <div class="row justify-content-between">
                    <marquee behavior="scroll" style="color: rgb(247, 210, 155);" direction="left">
                        <p><span style="font-family: Verdana, sans-serif; font-size: 15px; white-space: nowrap;">Welcome
                                to ITRKARAO * HURRY UP! LAST DATE OF FILING ITR IS 31st JULY. DON'T MISS THE DATE: *
                            </span> </p>
                    </marquee>
                </div>
            </div>
        </div>
        <?php
        include 'header.php';
        ?>
    </div>


    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Fill Your Partnar Details</h3>
                            </div>
                            <form role="form" action="#" id="partner-form">
                                <input type="hidden" name="send-partner-mail" />
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="form-group col-md-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required name="name" placeholder="Enter your name ">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" required name="phone" placeholder="Enter phone no. ">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required name="email" placeholder="Enter email ">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>State</label>
                                            <input type="text" class="form-control" required name="state" placeholder="Enter state ">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>City</label>
                                            <input type="text" class="form-control" required name="city" placeholder="Enter city ">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Services provided by you</label>
                                            <input type="text" class="form-control" required name="separate_services_provided_by_you" placeholder="Enter services provided by you ">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Message</label>
                                            <textarea class="form-control" required rows=4 name="message" placeholder="Enter message "> </textarea>
                                        </div>
                                        <div id="form-message-success" style="display:none;font-size:20px;margin-top:10px;" class="mb-4 text-center text-success">
                                            Your message was sent, Thank you!
                                        </div>
                                        <div id="form-message-danger" style="display:none;font-size:20px;margin-top:10px;" class="mb-4 text-center text-danger">
                                            Something went wrong!, please try again.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-outline-primary submit-btn" value="Submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    include 'footer.php';
    ?>
    <script src="../static/mainstatic/js/jquery-3.3.1.min.js"></script>
    <script src="../static/mainstatic/js/jquery-migrate-3.0.1.js"></script>
    <script src="../static/mainstatic/js/bootstrap.min.js"></script>
    <script src="../static/mainstatic/js/owl.carousel.js"></script>
    <script src="../static/mainstatic/js/jquery.magnific-popup.js"></script>
    <script src="../static/mainstatic/js/jquery.counterup.min.js"></script>
    <script src="../static/mainstatic/js/waypoints.min.js"></script>
    <script src="../static/mainstatic/js/wow.min.js"></script>
    <script src="../static/mainstatic/js/main.js"></script>
    <script src="../static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../static/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $('.textarea').summernote()
        })
    </script>
    <script>
        $("#partner-form").submit(function(event) {
            event.preventDefault();
            $(".submit-btn").html("<i class=`fa fa-circle-notch fa-spin`></i> Please wait...");
            $(".submit-btn").prop('disabled', true);
            $('#form-message-success').hide();
            $('#form-message-danger').hide();
            var formValues = $(this).serialize();
            $.post("mail-service.php", formValues, function(data) {
                $(".submit-btn").html("Submit");
                $(".submit-btn").prop('disabled', false);
                if (data) {
                    $('#form-message-success').show().delay(5000).fadeOut(500);
                    $("#partner-form")[0].reset();
                } else {
                    $('#form-message-danger').show().delay(5000).fadeOut(500);
                }
            });
        });
    </script>
</body>

</html>
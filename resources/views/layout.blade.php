<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>David Devenish</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Raleway:wght@300;500;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
        <div class="logo">
            <span class="logo-light">David</span>Devenish
        </div>
        </header>
        @yield('content')
        <footer>
            <div id="contact">
                <h2>Get in Touch</h2>
                <p>Use the form below to send an email.</p>
                <hr />
                <div class="contact-content">
                    <form>
                        <input type="text" placeholder="Your Name"/>
                        <input type="email" placeholder="Your email address" />
                        <input type="textarea" placeholder="Your Message" />
                        <input type="submit" />
                    </form>
                    <div class="other-details">
                        <p>You can also get in touch by:</p>
                        <p><strong>Phone:</strong> 01234 353312</p>
                        <p><strong>Address:</strong> Woodside Church, Dover Crescent, Bedford, MK41 8QH</p>
                        <hr />
                    </div>
                </div>
            </div>
            <div class="footer-links"></div>
        </footer>
    </body>
</html>

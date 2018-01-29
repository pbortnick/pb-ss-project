<!DOCTYPE html>

<html class="no-js" lang="$ContentLocale">
  <head>
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <% base_tag %>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    $MetaTags(false)<title>$Title &ndash; $SiteConfig.Title</title>
    <% require themedCSS('production/styles/bundle') %>
    <%-- require css('http://localhost:8080/production/styles/bundle.css') --%>
  </head>
  <body>
    <% include Header %>
    <% include Layout Layout=$Layout %>
    <% include Footer %>
    <% require themedJavascript('production/js/bundle') %>
    <%-- require javascript('http://localhost:8080/production/js/bundle.js') --%>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
  </body>
</html>

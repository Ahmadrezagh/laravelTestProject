<!DOCTYPE html>

<html lang="en-US" class=" yes-js js_active js js_active  vc_desktop  vc_transform  vc_transform ">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title>{{setting('name')}} @if (trim($__env->yieldContent('title'))) - @yield('title')@endif</title>
    <meta name="robots" content="max-image-preview:large">
    <noscript>
        <style>#preloader {
                display: none;
            }</style>
    </noscript>
    <link rel="dns-prefetch" href="https://static.addtoany.com/">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="alternate" type="application/rss+xml" title="Red Chili » Feed"
          href="feed/">
    <link rel="alternate" type="application/rss+xml" title="Red Chili » Comments Feed"
          href="comments/feed/">
    <style type="text/css" media="all">@font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlbHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlSHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlZHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlYHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlWHYjMdZwl.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlbHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlSHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlZHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlYHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlWHYjMdZwl.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlbHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlSHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlZHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlYHYjMdZwlou4.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Oswald';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v48/TK3IWkUHHAIjg75cFRf3bXL8LICs1_Fv40pKlN4NNSeSASz7FmlWHYjMdZwl.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufA5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufJ5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufB5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufO5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufC5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufD5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufN5qWr4xCC.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufA5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufJ5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufB5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufO5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufC5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufD5qWr4xCCQ_k.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-display: block;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v23/BngMUXZYTXPIvIBgJJSb6ufN5qWr4xCC.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }</style>
    <style id="wp-block-library-theme-inline-css" type="text/css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation, .wp-block-pullquote cite, .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite, .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large, .wp-block-quote.is-style-large, .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td, .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--strong-magenta: #a156b4;
            --wp--preset--color--light-grayish-magenta: #d0a5db;
            --wp--preset--color--very-light-gray: #eee;
            --wp--preset--color--very-dark-gray: #444;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 12px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 28px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 50px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <style id="extendify-gutenberg-patterns-and-templates-utilities-inline-css" type="text/css">
        .ext-absolute {
            position: absolute !important
        }

        .ext-relative {
            position: relative !important
        }

        .ext-top-base {
            top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-top-lg {
            top: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--top-base {
            top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--top-lg {
            top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-right-base {
            right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-right-lg {
            right: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--right-base {
            right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--right-lg {
            right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-bottom-base {
            bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-bottom-lg {
            bottom: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--bottom-base {
            bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--bottom-lg {
            bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-left-base {
            left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-left-lg {
            left: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--left-base {
            left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--left-lg {
            left: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-order-1 {
            order: 1 !important
        }

        .ext-order-2 {
            order: 2 !important
        }

        .ext-col-auto {
            grid-column: auto !important
        }

        .ext-col-span-1 {
            grid-column: span 1/span 1 !important
        }

        .ext-col-span-2 {
            grid-column: span 2/span 2 !important
        }

        .ext-col-span-3 {
            grid-column: span 3/span 3 !important
        }

        .ext-col-span-4 {
            grid-column: span 4/span 4 !important
        }

        .ext-col-span-5 {
            grid-column: span 5/span 5 !important
        }

        .ext-col-span-6 {
            grid-column: span 6/span 6 !important
        }

        .ext-col-span-7 {
            grid-column: span 7/span 7 !important
        }

        .ext-col-span-8 {
            grid-column: span 8/span 8 !important
        }

        .ext-col-span-9 {
            grid-column: span 9/span 9 !important
        }

        .ext-col-span-10 {
            grid-column: span 10/span 10 !important
        }

        .ext-col-span-11 {
            grid-column: span 11/span 11 !important
        }

        .ext-col-span-12 {
            grid-column: span 12/span 12 !important
        }

        .ext-col-span-full {
            grid-column: 1/-1 !important
        }

        .ext-col-start-1 {
            grid-column-start: 1 !important
        }

        .ext-col-start-2 {
            grid-column-start: 2 !important
        }

        .ext-col-start-3 {
            grid-column-start: 3 !important
        }

        .ext-col-start-4 {
            grid-column-start: 4 !important
        }

        .ext-col-start-5 {
            grid-column-start: 5 !important
        }

        .ext-col-start-6 {
            grid-column-start: 6 !important
        }

        .ext-col-start-7 {
            grid-column-start: 7 !important
        }

        .ext-col-start-8 {
            grid-column-start: 8 !important
        }

        .ext-col-start-9 {
            grid-column-start: 9 !important
        }

        .ext-col-start-10 {
            grid-column-start: 10 !important
        }

        .ext-col-start-11 {
            grid-column-start: 11 !important
        }

        .ext-col-start-12 {
            grid-column-start: 12 !important
        }

        .ext-col-start-13 {
            grid-column-start: 13 !important
        }

        .ext-col-start-auto {
            grid-column-start: auto !important
        }

        .ext-col-end-1 {
            grid-column-end: 1 !important
        }

        .ext-col-end-2 {
            grid-column-end: 2 !important
        }

        .ext-col-end-3 {
            grid-column-end: 3 !important
        }

        .ext-col-end-4 {
            grid-column-end: 4 !important
        }

        .ext-col-end-5 {
            grid-column-end: 5 !important
        }

        .ext-col-end-6 {
            grid-column-end: 6 !important
        }

        .ext-col-end-7 {
            grid-column-end: 7 !important
        }

        .ext-col-end-8 {
            grid-column-end: 8 !important
        }

        .ext-col-end-9 {
            grid-column-end: 9 !important
        }

        .ext-col-end-10 {
            grid-column-end: 10 !important
        }

        .ext-col-end-11 {
            grid-column-end: 11 !important
        }

        .ext-col-end-12 {
            grid-column-end: 12 !important
        }

        .ext-col-end-13 {
            grid-column-end: 13 !important
        }

        .ext-col-end-auto {
            grid-column-end: auto !important
        }

        .ext-row-auto {
            grid-row: auto !important
        }

        .ext-row-span-1 {
            grid-row: span 1/span 1 !important
        }

        .ext-row-span-2 {
            grid-row: span 2/span 2 !important
        }

        .ext-row-span-3 {
            grid-row: span 3/span 3 !important
        }

        .ext-row-span-4 {
            grid-row: span 4/span 4 !important
        }

        .ext-row-span-5 {
            grid-row: span 5/span 5 !important
        }

        .ext-row-span-6 {
            grid-row: span 6/span 6 !important
        }

        .ext-row-span-full {
            grid-row: 1/-1 !important
        }

        .ext-row-start-1 {
            grid-row-start: 1 !important
        }

        .ext-row-start-2 {
            grid-row-start: 2 !important
        }

        .ext-row-start-3 {
            grid-row-start: 3 !important
        }

        .ext-row-start-4 {
            grid-row-start: 4 !important
        }

        .ext-row-start-5 {
            grid-row-start: 5 !important
        }

        .ext-row-start-6 {
            grid-row-start: 6 !important
        }

        .ext-row-start-7 {
            grid-row-start: 7 !important
        }

        .ext-row-start-auto {
            grid-row-start: auto !important
        }

        .ext-row-end-1 {
            grid-row-end: 1 !important
        }

        .ext-row-end-2 {
            grid-row-end: 2 !important
        }

        .ext-row-end-3 {
            grid-row-end: 3 !important
        }

        .ext-row-end-4 {
            grid-row-end: 4 !important
        }

        .ext-row-end-5 {
            grid-row-end: 5 !important
        }

        .ext-row-end-6 {
            grid-row-end: 6 !important
        }

        .ext-row-end-7 {
            grid-row-end: 7 !important
        }

        .ext-row-end-auto {
            grid-row-end: auto !important
        }

        .ext-m-0:not([style*=margin]) {
            margin: 0 !important
        }

        .ext-m-auto:not([style*=margin]) {
            margin: auto !important
        }

        .ext-m-base:not([style*=margin]) {
            margin: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-m-lg:not([style*=margin]) {
            margin: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--m-base:not([style*=margin]) {
            margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--m-lg:not([style*=margin]) {
            margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-mx-0:not([style*=margin]) {
            margin-left: 0 !important;
            margin-right: 0 !important
        }

        .ext-mx-auto:not([style*=margin]) {
            margin-left: auto !important;
            margin-right: auto !important
        }

        .ext-mx-base:not([style*=margin]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            margin-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mx-lg:not([style*=margin]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important;
            margin-right: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--mx-base:not([style*=margin]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--mx-lg:not([style*=margin]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-my-0:not([style*=margin]) {
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        .ext-my-auto:not([style*=margin]) {
            margin-bottom: auto !important;
            margin-top: auto !important
        }

        .ext-my-base:not([style*=margin]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            margin-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-my-lg:not([style*=margin]) {
            margin-bottom: var(--extendify--spacing--large, 3rem) !important;
            margin-top: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--my-base:not([style*=margin]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--my-lg:not([style*=margin]) {
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-mt-0:not([style*=margin]) {
            margin-top: 0 !important
        }

        .ext-mt-auto:not([style*=margin]) {
            margin-top: auto !important
        }

        .ext-mt-base:not([style*=margin]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mt-lg:not([style*=margin]) {
            margin-top: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--mt-base:not([style*=margin]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--mt-lg:not([style*=margin]) {
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-mr-0:not([style*=margin]) {
            margin-right: 0 !important
        }

        .ext-mr-auto:not([style*=margin]) {
            margin-right: auto !important
        }

        .ext-mr-base:not([style*=margin]) {
            margin-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mr-lg:not([style*=margin]) {
            margin-right: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--mr-base:not([style*=margin]) {
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--mr-lg:not([style*=margin]) {
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-mb-0:not([style*=margin]) {
            margin-bottom: 0 !important
        }

        .ext-mb-auto:not([style*=margin]) {
            margin-bottom: auto !important
        }

        .ext-mb-base:not([style*=margin]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mb-lg:not([style*=margin]) {
            margin-bottom: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--mb-base:not([style*=margin]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--mb-lg:not([style*=margin]) {
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-ml-0:not([style*=margin]) {
            margin-left: 0 !important
        }

        .ext-ml-auto:not([style*=margin]) {
            margin-left: auto !important
        }

        .ext-ml-base:not([style*=margin]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-ml-lg:not([style*=margin]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important
        }

        .ext--ml-base:not([style*=margin]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
        }

        .ext--ml-lg:not([style*=margin]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important
        }

        .ext-block {
            display: block !important
        }

        .ext-inline-block {
            display: inline-block !important
        }

        .ext-inline {
            display: inline !important
        }

        .ext-flex {
            display: flex !important
        }

        .ext-inline-flex {
            display: inline-flex !important
        }

        .ext-grid {
            display: grid !important
        }

        .ext-inline-grid {
            display: inline-grid !important
        }

        .ext-hidden {
            display: none !important
        }

        .ext-w-auto {
            width: auto !important
        }

        .ext-w-full {
            width: 100% !important
        }

        .ext-max-w-full {
            max-width: 100% !important
        }

        .ext-flex-1 {
            flex: 1 1 0% !important
        }

        .ext-flex-auto {
            flex: 1 1 auto !important
        }

        .ext-flex-initial {
            flex: 0 1 auto !important
        }

        .ext-flex-none {
            flex: none !important
        }

        .ext-flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .ext-flex-shrink {
            flex-shrink: 1 !important
        }

        .ext-flex-grow-0 {
            flex-grow: 0 !important
        }

        .ext-flex-grow {
            flex-grow: 1 !important
        }

        .ext-list-none {
            list-style-type: none !important
        }

        .ext-grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-2 {
            grid-template-columns:repeat(2, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-3 {
            grid-template-columns:repeat(3, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-4 {
            grid-template-columns:repeat(4, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-5 {
            grid-template-columns:repeat(5, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-6 {
            grid-template-columns:repeat(6, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-7 {
            grid-template-columns:repeat(7, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-8 {
            grid-template-columns:repeat(8, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-9 {
            grid-template-columns:repeat(9, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-10 {
            grid-template-columns:repeat(10, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-11 {
            grid-template-columns:repeat(11, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-12 {
            grid-template-columns:repeat(12, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-none {
            grid-template-columns:none !important
        }

        .ext-grid-rows-1 {
            grid-template-rows:repeat(1, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-2 {
            grid-template-rows:repeat(2, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-3 {
            grid-template-rows:repeat(3, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-4 {
            grid-template-rows:repeat(4, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-5 {
            grid-template-rows:repeat(5, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-6 {
            grid-template-rows:repeat(6, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-none {
            grid-template-rows:none !important
        }

        .ext-flex-row {
            flex-direction: row !important
        }

        .ext-flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .ext-flex-col {
            flex-direction: column !important
        }

        .ext-flex-col-reverse {
            flex-direction: column-reverse !important
        }

        .ext-flex-wrap {
            flex-wrap: wrap !important
        }

        .ext-flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .ext-flex-nowrap {
            flex-wrap: nowrap !important
        }

        .ext-items-start {
            align-items: flex-start !important
        }

        .ext-items-end {
            align-items: flex-end !important
        }

        .ext-items-center {
            align-items: center !important
        }

        .ext-items-baseline {
            align-items: baseline !important
        }

        .ext-items-stretch {
            align-items: stretch !important
        }

        .ext-justify-start {
            justify-content: flex-start !important
        }

        .ext-justify-end {
            justify-content: flex-end !important
        }

        .ext-justify-center {
            justify-content: center !important
        }

        .ext-justify-between {
            justify-content: space-between !important
        }

        .ext-justify-around {
            justify-content: space-around !important
        }

        .ext-justify-evenly {
            justify-content: space-evenly !important
        }

        .ext-justify-items-start {
            justify-items: start !important
        }

        .ext-justify-items-end {
            justify-items: end !important
        }

        .ext-justify-items-center {
            justify-items: center !important
        }

        .ext-justify-items-stretch {
            justify-items: stretch !important
        }

        .ext-gap-0 {
            gap: 0 !important
        }

        .ext-gap-base {
            gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-lg {
            gap: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-gap-x-0 {
            -moz-column-gap: 0 !important;
            column-gap: 0 !important
        }

        .ext-gap-x-base {
            -moz-column-gap: var(--wp--style--block-gap, 1.75rem) !important;
            column-gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-x-lg {
            -moz-column-gap: var(--extendify--spacing--large, 3rem) !important;
            column-gap: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-gap-y-0 {
            row-gap: 0 !important
        }

        .ext-gap-y-base {
            row-gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-y-lg {
            row-gap: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-justify-self-auto {
            justify-self: auto !important
        }

        .ext-justify-self-start {
            justify-self: start !important
        }

        .ext-justify-self-end {
            justify-self: end !important
        }

        .ext-justify-self-center {
            justify-self: center !important
        }

        .ext-justify-self-stretch {
            justify-self: stretch !important
        }

        .ext-rounded-none {
            border-radius: 0 !important
        }

        .ext-rounded-full {
            border-radius: 9999px !important
        }

        .ext-rounded-t-none {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important
        }

        .ext-rounded-t-full {
            border-top-left-radius: 9999px !important;
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-r-none {
            border-bottom-right-radius: 0 !important;
            border-top-right-radius: 0 !important
        }

        .ext-rounded-r-full {
            border-bottom-right-radius: 9999px !important;
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-b-none {
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important
        }

        .ext-rounded-b-full {
            border-bottom-left-radius: 9999px !important;
            border-bottom-right-radius: 9999px !important
        }

        .ext-rounded-l-none {
            border-bottom-left-radius: 0 !important;
            border-top-left-radius: 0 !important
        }

        .ext-rounded-l-full {
            border-bottom-left-radius: 9999px !important;
            border-top-left-radius: 9999px !important
        }

        .ext-rounded-tl-none {
            border-top-left-radius: 0 !important
        }

        .ext-rounded-tl-full {
            border-top-left-radius: 9999px !important
        }

        .ext-rounded-tr-none {
            border-top-right-radius: 0 !important
        }

        .ext-rounded-tr-full {
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-br-none {
            border-bottom-right-radius: 0 !important
        }

        .ext-rounded-br-full {
            border-bottom-right-radius: 9999px !important
        }

        .ext-rounded-bl-none {
            border-bottom-left-radius: 0 !important
        }

        .ext-rounded-bl-full {
            border-bottom-left-radius: 9999px !important
        }

        .ext-border-0 {
            border-width: 0 !important
        }

        .ext-border-t-0 {
            border-top-width: 0 !important
        }

        .ext-border-r-0 {
            border-right-width: 0 !important
        }

        .ext-border-b-0 {
            border-bottom-width: 0 !important
        }

        .ext-border-l-0 {
            border-left-width: 0 !important
        }

        .ext-p-0:not([style*=padding]) {
            padding: 0 !important
        }

        .ext-p-base:not([style*=padding]) {
            padding: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-p-lg:not([style*=padding]) {
            padding: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-px-0:not([style*=padding]) {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .ext-px-base:not([style*=padding]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            padding-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-px-lg:not([style*=padding]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important;
            padding-right: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-py-0:not([style*=padding]) {
            padding-bottom: 0 !important;
            padding-top: 0 !important
        }

        .ext-py-base:not([style*=padding]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            padding-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-py-lg:not([style*=padding]) {
            padding-bottom: var(--extendify--spacing--large, 3rem) !important;
            padding-top: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-pt-0:not([style*=padding]) {
            padding-top: 0 !important
        }

        .ext-pt-base:not([style*=padding]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pt-lg:not([style*=padding]) {
            padding-top: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-pr-0:not([style*=padding]) {
            padding-right: 0 !important
        }

        .ext-pr-base:not([style*=padding]) {
            padding-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pr-lg:not([style*=padding]) {
            padding-right: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-pb-0:not([style*=padding]) {
            padding-bottom: 0 !important
        }

        .ext-pb-base:not([style*=padding]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pb-lg:not([style*=padding]) {
            padding-bottom: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-pl-0:not([style*=padding]) {
            padding-left: 0 !important
        }

        .ext-pl-base:not([style*=padding]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pl-lg:not([style*=padding]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important
        }

        .ext-text-left {
            text-align: left !important
        }

        .ext-text-center {
            text-align: center !important
        }

        .ext-text-right {
            text-align: right !important
        }

        .ext-leading-none {
            line-height: 1 !important
        }

        .ext-leading-tight {
            line-height: 1.25 !important
        }

        .ext-leading-snug {
            line-height: 1.375 !important
        }

        .ext-leading-normal {
            line-height: 1.5 !important
        }

        .ext-leading-relaxed {
            line-height: 1.625 !important
        }

        .ext-leading-loose {
            line-height: 2 !important
        }

        .clip-path--rhombus img {
            -webkit-clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%);
            clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%)
        }

        .clip-path--diamond img {
            -webkit-clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%);
            clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%)
        }

        .clip-path--rhombus-alt img {
            -webkit-clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%);
            clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%)
        }

        .wp-block-columns[class*=fullwidth-cols] {
            margin-bottom: unset
        }

        .wp-block-column.editor\:pointer-events-none {
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        .is-root-container.block-editor-block-list__layout > [data-align=full]:not(:first-of-type) > .wp-block-column.editor\:pointer-events-none, .is-root-container.block-editor-block-list__layout > [data-align=wide] > .wp-block-column.editor\:pointer-events-none {
            margin-top: calc(var(--wp--style--block-gap, 28px) * -1) !important
        }

        .ext .wp-block-columns .wp-block-column[style*=padding] {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .ext .wp-block-columns + .wp-block-columns:not([class*=mt-]):not([class*=my-]):not([style*=margin]) {
            margin-top: 0 !important
        }

        [class*=fullwidth-cols] .wp-block-column:first-child, [class*=fullwidth-cols] .wp-block-group:first-child {
            margin-top: 0
        }

        [class*=fullwidth-cols] .wp-block-column:last-child, [class*=fullwidth-cols] .wp-block-group:last-child {
            margin-bottom: 0
        }

        [class*=fullwidth-cols] .wp-block-column:first-child > *, [class*=fullwidth-cols] .wp-block-column > :first-child {
            margin-top: 0
        }

        .ext .is-not-stacked-on-mobile .wp-block-column, [class*=fullwidth-cols] .wp-block-column > :last-child {
            margin-bottom: 0
        }

        .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile) > .wp-block-column:not(:last-child) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem)
        }

        @media (min-width: 782px) {
            .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile) > .wp-block-column:not(:last-child) {
                margin-bottom: 0
            }
        }

        .wp-block-columns[class*=fullwidth-cols].is-not-stacked-on-mobile > .wp-block-column {
            margin-bottom: 0 !important
        }

        @media (min-width: 600px) and (max-width: 781px) {
            .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile) > .wp-block-column:nth-child(2n) {
                margin-left: var(--wp--style--block-gap, 2em)
            }
        }

        @media (max-width: 781px) {
            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column, .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column:not([style*=margin]) {
                margin-left: 0 !important
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (max-width: 1079px) {
            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column, .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column:not([style*=margin]) {
                margin-left: 0 !important
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column {
                flex-basis: 100% !important
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) > .wp-block-column:not(:last-child) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }
        }

        .direction-rtl {
            direction: rtl
        }

        .direction-ltr {
            direction: ltr
        }

        .is-style-inline-list {
            padding-left: 0 !important
        }

        .is-style-inline-list li {
            list-style-type: none !important
        }

        @media (min-width: 782px) {
            .is-style-inline-list li {
                display: inline !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }
        }

        @media (min-width: 782px) {
            .is-style-inline-list li:first-child {
                margin-left: 0 !important
            }
        }

        @media (min-width: 782px) {
            .is-style-inline-list li:last-child {
                margin-right: 0 !important
            }
        }

        .bring-to-front {
            position: relative;
            z-index: 10
        }

        .text-stroke {
            -webkit-text-stroke-color: var(--wp--preset--color--background)
        }

        .text-stroke, .text-stroke--primary {
            -webkit-text-stroke-width: var(
                    --wp--custom--typography--text-stroke-width, 2px
            )
        }

        .text-stroke--primary {
            -webkit-text-stroke-color: var(--wp--preset--color--primary)
        }

        .text-stroke--secondary {
            -webkit-text-stroke-width: var(
                    --wp--custom--typography--text-stroke-width, 2px
            );
            -webkit-text-stroke-color: var(--wp--preset--color--secondary)
        }

        .editor\:no-caption .block-editor-rich-text__editable {
            display: none !important
        }

        .editor\:no-inserter .wp-block-column:not(.is-selected) > .block-list-appender, .editor\:no-inserter .wp-block-cover__inner-container > .block-list-appender, .editor\:no-inserter .wp-block-group__inner-container > .block-list-appender, .editor\:no-inserter > .block-list-appender {
            display: none
        }

        .editor\:no-resize .components-resizable-box__handle, .editor\:no-resize .components-resizable-box__handle:after, .editor\:no-resize .components-resizable-box__side-handle:before {
            display: none;
            pointer-events: none
        }

        .editor\:no-resize .components-resizable-box__container {
            display: block
        }

        .editor\:pointer-events-none {
            pointer-events: none
        }

        .is-style-angled {
            justify-content: flex-end
        }

        .ext .is-style-angled > [class*=_inner-container], .is-style-angled {
            align-items: center
        }

        .is-style-angled .wp-block-cover__image-background, .is-style-angled .wp-block-cover__video-background {
            -webkit-clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
            clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
            z-index: 1
        }

        @media (min-width: 782px) {
            .is-style-angled .wp-block-cover__image-background, .is-style-angled .wp-block-cover__video-background {
                -webkit-clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%);
                clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%)
            }
        }

        .has-foreground-color {
            color: var(--wp--preset--color--foreground, #000) !important
        }

        .has-foreground-background-color {
            background-color: var(--wp--preset--color--foreground, #000) !important
        }

        .has-background-color {
            color: var(--wp--preset--color--background, #fff) !important
        }

        .has-background-background-color {
            background-color: var(--wp--preset--color--background, #fff) !important
        }

        .has-primary-color {
            color: var(--wp--preset--color--primary, #4b5563) !important
        }

        .has-primary-background-color {
            background-color: var(--wp--preset--color--primary, #4b5563) !important
        }

        .has-secondary-color {
            color: var(--wp--preset--color--secondary, #9ca3af) !important
        }

        .has-secondary-background-color {
            background-color: var(--wp--preset--color--secondary, #9ca3af) !important
        }

        .ext.has-text-color h1, .ext.has-text-color h2, .ext.has-text-color h3, .ext.has-text-color h4, .ext.has-text-color h5, .ext.has-text-color h6, .ext.has-text-color p {
            color: currentColor
        }

        .has-white-color {
            color: var(--wp--preset--color--white, #fff) !important
        }

        .has-black-color {
            color: var(--wp--preset--color--black, #000) !important
        }

        .has-ext-foreground-background-color {
            background-color: var(
                    --wp--preset--color--foreground, var(--wp--preset--color--black, #000)
            ) !important
        }

        .has-ext-primary-background-color {
            background-color: var(
                    --wp--preset--color--primary, var(--wp--preset--color--cyan-bluish-gray, #000)
            ) !important
        }

        .wp-block-button__link.has-black-background-color {
            border-color: var(--wp--preset--color--black, #000)
        }

        .wp-block-button__link.has-white-background-color {
            border-color: var(--wp--preset--color--white, #fff)
        }

        .has-ext-small-font-size {
            font-size: var(--wp--preset--font-size--ext-small) !important
        }

        .has-ext-medium-font-size {
            font-size: var(--wp--preset--font-size--ext-medium) !important
        }

        .has-ext-large-font-size {
            font-size: var(--wp--preset--font-size--ext-large) !important;
            line-height: 1.2
        }

        .has-ext-x-large-font-size {
            font-size: var(--wp--preset--font-size--ext-x-large) !important;
            line-height: 1
        }

        .has-ext-xx-large-font-size {
            font-size: var(--wp--preset--font-size--ext-xx-large) !important;
            line-height: 1
        }

        .has-ext-x-large-font-size:not([style*=line-height]), .has-ext-xx-large-font-size:not([style*=line-height]) {
            line-height: 1.1
        }

        .ext .wp-block-group > * {
            margin-bottom: 0;
            margin-top: 0
        }

        .ext .wp-block-group > * + * {
            margin-bottom: 0
        }

        .ext .wp-block-group > * + *, .ext h2 {
            margin-top: var(--wp--style--block-gap, 1.75rem)
        }

        .ext h2 {
            margin-bottom: var(--wp--style--block-gap, 1.75rem)
        }

        .has-ext-x-large-font-size + h3, .has-ext-x-large-font-size + p {
            margin-top: .5rem
        }

        .ext .wp-block-buttons > .wp-block-button.wp-block-button__width-25 {
            min-width: 12rem;
            width: calc(25% - var(--wp--style--block-gap, .5em) * .75)
        }

        .ext .ext-grid > [class*=_inner-container] {
            display: grid
        }

        .ext > [class*=_inner-container] > .ext-grid:not([class*=columns]), .ext > [class*=_inner-container] > .wp-block > .ext-grid:not([class*=columns]) {
            display: initial !important
        }

        .ext .ext-grid-cols-1 > [class*=_inner-container] {
            grid-template-columns:repeat(1, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-2 > [class*=_inner-container] {
            grid-template-columns:repeat(2, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-3 > [class*=_inner-container] {
            grid-template-columns:repeat(3, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-4 > [class*=_inner-container] {
            grid-template-columns:repeat(4, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-5 > [class*=_inner-container] {
            grid-template-columns:repeat(5, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-6 > [class*=_inner-container] {
            grid-template-columns:repeat(6, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-7 > [class*=_inner-container] {
            grid-template-columns:repeat(7, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-8 > [class*=_inner-container] {
            grid-template-columns:repeat(8, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-9 > [class*=_inner-container] {
            grid-template-columns:repeat(9, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-10 > [class*=_inner-container] {
            grid-template-columns:repeat(10, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-11 > [class*=_inner-container] {
            grid-template-columns:repeat(11, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-12 > [class*=_inner-container] {
            grid-template-columns:repeat(12, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-13 > [class*=_inner-container] {
            grid-template-columns:repeat(13, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-none > [class*=_inner-container] {
            grid-template-columns:none !important
        }

        .ext .ext-grid-rows-1 > [class*=_inner-container] {
            grid-template-rows:repeat(1, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-2 > [class*=_inner-container] {
            grid-template-rows:repeat(2, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-3 > [class*=_inner-container] {
            grid-template-rows:repeat(3, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-4 > [class*=_inner-container] {
            grid-template-rows:repeat(4, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-5 > [class*=_inner-container] {
            grid-template-rows:repeat(5, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-6 > [class*=_inner-container] {
            grid-template-rows:repeat(6, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-none > [class*=_inner-container] {
            grid-template-rows:none !important
        }

        .ext .ext-items-start > [class*=_inner-container] {
            align-items: flex-start !important
        }

        .ext .ext-items-end > [class*=_inner-container] {
            align-items: flex-end !important
        }

        .ext .ext-items-center > [class*=_inner-container] {
            align-items: center !important
        }

        .ext .ext-items-baseline > [class*=_inner-container] {
            align-items: baseline !important
        }

        .ext .ext-items-stretch > [class*=_inner-container] {
            align-items: stretch !important
        }

        .ext.wp-block-group > :last-child {
            margin-bottom: 0
        }

        .ext .wp-block-group__inner-container {
            padding: 0 !important
        }

        .ext.has-background {
            padding-left: var(--wp--style--block-gap, 1.75rem);
            padding-right: var(--wp--style--block-gap, 1.75rem)
        }

        .ext [class*=inner-container] > .alignwide [class*=inner-container], .ext [class*=inner-container] > [data-align=wide] [class*=inner-container] {
            max-width: var(--responsive--alignwide-width, 120rem)
        }

        .ext [class*=inner-container] > .alignwide [class*=inner-container] > *, .ext [class*=inner-container] > [data-align=wide] [class*=inner-container] > * {
            max-width: 100% !important
        }

        .ext .wp-block-image {
            position: relative;
            text-align: center
        }

        .ext .wp-block-image img {
            display: inline-block;
            vertical-align: middle
        }

        body {
            --extendify--spacing--large: var(
                    --wp--custom--spacing--large, clamp(2em, 8vw, 8em)
            );
            --wp--preset--font-size--ext-small: 1rem;
            --wp--preset--font-size--ext-medium: 1.125rem;
            --wp--preset--font-size--ext-large: clamp(1.65rem, 3.5vw, 2.15rem);
            --wp--preset--font-size--ext-x-large: clamp(3rem, 6vw, 4.75rem);
            --wp--preset--font-size--ext-xx-large: clamp(3.25rem, 7.5vw, 5.75rem);
            --wp--preset--color--black: #000;
            --wp--preset--color--white: #fff
        }

        .ext * {
            box-sizing: border-box
        }

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .components-resizable-box__container {
            background: transparent !important
        }

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .block-library-spacer__resize-container:before {
            display: none !important
        }

        .ext .wp-block-group__inner-container figure.wp-block-gallery.alignfull {
            margin-bottom: unset;
            margin-top: unset
        }

        .ext .alignwide {
            margin-left: auto !important;
            margin-right: auto !important
        }

        .is-root-container.block-editor-block-list__layout > [data-align=full]:not(:first-of-type) > .ext-my-0, .is-root-container.block-editor-block-list__layout > [data-align=wide] > .ext-my-0:not([style*=margin]) {
            margin-top: calc(var(--wp--style--block-gap, 28px) * -1) !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-50 {
            min-height: 50vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-60 {
            min-height: 60vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-70 {
            min-height: 70vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-80 {
            min-height: 80vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-100 {
            min-height: 100vw !important
        }

        .ext-mr-0.alignfull:not([style*=margin]):not([style*=margin]) {
            margin-right: 0 !important
        }

        .ext-ml-0:not([style*=margin]):not([style*=margin]) {
            margin-left: 0 !important
        }

        .is-root-container .wp-block[data-align=full] > .ext-mx-0:not([style*=margin]):not([style*=margin]) {
            margin-left: calc(var(--wp--custom--spacing--outer, 0) * 1) !important;
            margin-right: calc(var(--wp--custom--spacing--outer, 0) * 1) !important;
            overflow: hidden;
            width: unset
        }

        @media (min-width: 782px) {
            .tablet\:ext-absolute {
                position: absolute !important
            }

            .tablet\:ext-relative {
                position: relative !important
            }

            .tablet\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-top-lg {
                top: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--top-lg {
                top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-right-lg {
                right: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--right-lg {
                right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-left-lg {
                left: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--left-lg {
                left: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-order-1 {
                order: 1 !important
            }

            .tablet\:ext-order-2 {
                order: 2 !important
            }

            .tablet\:ext-m-0:not([style*=margin]) {
                margin: 0 !important
            }

            .tablet\:ext-m-auto:not([style*=margin]) {
                margin: auto !important
            }

            .tablet\:ext-m-base:not([style*=margin]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-m-lg:not([style*=margin]) {
                margin: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--m-base:not([style*=margin]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--m-lg:not([style*=margin]) {
                margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-mx-0:not([style*=margin]) {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .tablet\:ext-mx-auto:not([style*=margin]) {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .tablet\:ext-mx-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mx-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important;
                margin-right: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--mx-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--mx-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-my-0:not([style*=margin]) {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .tablet\:ext-my-auto:not([style*=margin]) {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .tablet\:ext-my-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-my-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large, 3rem) !important;
                margin-top: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--my-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--my-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-mt-0:not([style*=margin]) {
                margin-top: 0 !important
            }

            .tablet\:ext-mt-auto:not([style*=margin]) {
                margin-top: auto !important
            }

            .tablet\:ext-mt-base:not([style*=margin]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mt-lg:not([style*=margin]) {
                margin-top: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--mt-base:not([style*=margin]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--mt-lg:not([style*=margin]) {
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-mr-0:not([style*=margin]) {
                margin-right: 0 !important
            }

            .tablet\:ext-mr-auto:not([style*=margin]) {
                margin-right: auto !important
            }

            .tablet\:ext-mr-base:not([style*=margin]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mr-lg:not([style*=margin]) {
                margin-right: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--mr-base:not([style*=margin]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--mr-lg:not([style*=margin]) {
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-mb-0:not([style*=margin]) {
                margin-bottom: 0 !important
            }

            .tablet\:ext-mb-auto:not([style*=margin]) {
                margin-bottom: auto !important
            }

            .tablet\:ext-mb-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mb-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--mb-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--mb-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-ml-0:not([style*=margin]) {
                margin-left: 0 !important
            }

            .tablet\:ext-ml-auto:not([style*=margin]) {
                margin-left: auto !important
            }

            .tablet\:ext-ml-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-ml-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext--ml-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .tablet\:ext--ml-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .tablet\:ext-block {
                display: block !important
            }

            .tablet\:ext-inline-block {
                display: inline-block !important
            }

            .tablet\:ext-inline {
                display: inline !important
            }

            .tablet\:ext-flex {
                display: flex !important
            }

            .tablet\:ext-inline-flex {
                display: inline-flex !important
            }

            .tablet\:ext-grid {
                display: grid !important
            }

            .tablet\:ext-inline-grid {
                display: inline-grid !important
            }

            .tablet\:ext-hidden {
                display: none !important
            }

            .tablet\:ext-w-auto {
                width: auto !important
            }

            .tablet\:ext-w-full {
                width: 100% !important
            }

            .tablet\:ext-max-w-full {
                max-width: 100% !important
            }

            .tablet\:ext-flex-1 {
                flex: 1 1 0% !important
            }

            .tablet\:ext-flex-auto {
                flex: 1 1 auto !important
            }

            .tablet\:ext-flex-initial {
                flex: 0 1 auto !important
            }

            .tablet\:ext-flex-none {
                flex: none !important
            }

            .tablet\:ext-flex-shrink-0 {
                flex-shrink: 0 !important
            }

            .tablet\:ext-flex-shrink {
                flex-shrink: 1 !important
            }

            .tablet\:ext-flex-grow-0 {
                flex-grow: 0 !important
            }

            .tablet\:ext-flex-grow {
                flex-grow: 1 !important
            }

            .tablet\:ext-list-none {
                list-style-type: none !important
            }

            .tablet\:ext-grid-cols-1 {
                grid-template-columns:repeat(1, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-3 {
                grid-template-columns:repeat(3, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-4 {
                grid-template-columns:repeat(4, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-5 {
                grid-template-columns:repeat(5, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-6 {
                grid-template-columns:repeat(6, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-7 {
                grid-template-columns:repeat(7, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-8 {
                grid-template-columns:repeat(8, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-9 {
                grid-template-columns:repeat(9, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-10 {
                grid-template-columns:repeat(10, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-11 {
                grid-template-columns:repeat(11, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-12 {
                grid-template-columns:repeat(12, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-none {
                grid-template-columns:none !important
            }

            .tablet\:ext-flex-row {
                flex-direction: row !important
            }

            .tablet\:ext-flex-row-reverse {
                flex-direction: row-reverse !important
            }

            .tablet\:ext-flex-col {
                flex-direction: column !important
            }

            .tablet\:ext-flex-col-reverse {
                flex-direction: column-reverse !important
            }

            .tablet\:ext-flex-wrap {
                flex-wrap: wrap !important
            }

            .tablet\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .tablet\:ext-flex-nowrap {
                flex-wrap: nowrap !important
            }

            .tablet\:ext-items-start {
                align-items: flex-start !important
            }

            .tablet\:ext-items-end {
                align-items: flex-end !important
            }

            .tablet\:ext-items-center {
                align-items: center !important
            }

            .tablet\:ext-items-baseline {
                align-items: baseline !important
            }

            .tablet\:ext-items-stretch {
                align-items: stretch !important
            }

            .tablet\:ext-justify-start {
                justify-content: flex-start !important
            }

            .tablet\:ext-justify-end {
                justify-content: flex-end !important
            }

            .tablet\:ext-justify-center {
                justify-content: center !important
            }

            .tablet\:ext-justify-between {
                justify-content: space-between !important
            }

            .tablet\:ext-justify-around {
                justify-content: space-around !important
            }

            .tablet\:ext-justify-evenly {
                justify-content: space-evenly !important
            }

            .tablet\:ext-justify-items-start {
                justify-items: start !important
            }

            .tablet\:ext-justify-items-end {
                justify-items: end !important
            }

            .tablet\:ext-justify-items-center {
                justify-items: center !important
            }

            .tablet\:ext-justify-items-stretch {
                justify-items: stretch !important
            }

            .tablet\:ext-justify-self-auto {
                justify-self: auto !important
            }

            .tablet\:ext-justify-self-start {
                justify-self: start !important
            }

            .tablet\:ext-justify-self-end {
                justify-self: end !important
            }

            .tablet\:ext-justify-self-center {
                justify-self: center !important
            }

            .tablet\:ext-justify-self-stretch {
                justify-self: stretch !important
            }

            .tablet\:ext-p-0:not([style*=padding]) {
                padding: 0 !important
            }

            .tablet\:ext-p-base:not([style*=padding]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-p-lg:not([style*=padding]) {
                padding: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext-px-0:not([style*=padding]) {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .tablet\:ext-px-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-px-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important;
                padding-right: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext-py-0:not([style*=padding]) {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .tablet\:ext-py-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-py-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large, 3rem) !important;
                padding-top: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext-pt-0:not([style*=padding]) {
                padding-top: 0 !important
            }

            .tablet\:ext-pt-base:not([style*=padding]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pt-lg:not([style*=padding]) {
                padding-top: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext-pr-0:not([style*=padding]) {
                padding-right: 0 !important
            }

            .tablet\:ext-pr-base:not([style*=padding]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pr-lg:not([style*=padding]) {
                padding-right: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext-pb-0:not([style*=padding]) {
                padding-bottom: 0 !important
            }

            .tablet\:ext-pb-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pb-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext-pl-0:not([style*=padding]) {
                padding-left: 0 !important
            }

            .tablet\:ext-pl-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pl-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important
            }

            .tablet\:ext-text-left {
                text-align: left !important
            }

            .tablet\:ext-text-center {
                text-align: center !important
            }

            .tablet\:ext-text-right {
                text-align: right !important
            }
        }

        @media (min-width: 1080px) {
            .desktop\:ext-absolute {
                position: absolute !important
            }

            .desktop\:ext-relative {
                position: relative !important
            }

            .desktop\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-top-lg {
                top: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--top-lg {
                top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-right-lg {
                right: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--right-lg {
                right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-left-lg {
                left: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--left-lg {
                left: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-order-1 {
                order: 1 !important
            }

            .desktop\:ext-order-2 {
                order: 2 !important
            }

            .desktop\:ext-m-0:not([style*=margin]) {
                margin: 0 !important
            }

            .desktop\:ext-m-auto:not([style*=margin]) {
                margin: auto !important
            }

            .desktop\:ext-m-base:not([style*=margin]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-m-lg:not([style*=margin]) {
                margin: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--m-base:not([style*=margin]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--m-lg:not([style*=margin]) {
                margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-mx-0:not([style*=margin]) {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .desktop\:ext-mx-auto:not([style*=margin]) {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .desktop\:ext-mx-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mx-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important;
                margin-right: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--mx-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--mx-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-my-0:not([style*=margin]) {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .desktop\:ext-my-auto:not([style*=margin]) {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .desktop\:ext-my-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-my-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large, 3rem) !important;
                margin-top: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--my-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--my-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-mt-0:not([style*=margin]) {
                margin-top: 0 !important
            }

            .desktop\:ext-mt-auto:not([style*=margin]) {
                margin-top: auto !important
            }

            .desktop\:ext-mt-base:not([style*=margin]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mt-lg:not([style*=margin]) {
                margin-top: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--mt-base:not([style*=margin]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--mt-lg:not([style*=margin]) {
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-mr-0:not([style*=margin]) {
                margin-right: 0 !important
            }

            .desktop\:ext-mr-auto:not([style*=margin]) {
                margin-right: auto !important
            }

            .desktop\:ext-mr-base:not([style*=margin]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mr-lg:not([style*=margin]) {
                margin-right: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--mr-base:not([style*=margin]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--mr-lg:not([style*=margin]) {
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-mb-0:not([style*=margin]) {
                margin-bottom: 0 !important
            }

            .desktop\:ext-mb-auto:not([style*=margin]) {
                margin-bottom: auto !important
            }

            .desktop\:ext-mb-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mb-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--mb-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--mb-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-ml-0:not([style*=margin]) {
                margin-left: 0 !important
            }

            .desktop\:ext-ml-auto:not([style*=margin]) {
                margin-left: auto !important
            }

            .desktop\:ext-ml-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-ml-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext--ml-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important
            }

            .desktop\:ext--ml-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important
            }

            .desktop\:ext-block {
                display: block !important
            }

            .desktop\:ext-inline-block {
                display: inline-block !important
            }

            .desktop\:ext-inline {
                display: inline !important
            }

            .desktop\:ext-flex {
                display: flex !important
            }

            .desktop\:ext-inline-flex {
                display: inline-flex !important
            }

            .desktop\:ext-grid {
                display: grid !important
            }

            .desktop\:ext-inline-grid {
                display: inline-grid !important
            }

            .desktop\:ext-hidden {
                display: none !important
            }

            .desktop\:ext-w-auto {
                width: auto !important
            }

            .desktop\:ext-w-full {
                width: 100% !important
            }

            .desktop\:ext-max-w-full {
                max-width: 100% !important
            }

            .desktop\:ext-flex-1 {
                flex: 1 1 0% !important
            }

            .desktop\:ext-flex-auto {
                flex: 1 1 auto !important
            }

            .desktop\:ext-flex-initial {
                flex: 0 1 auto !important
            }

            .desktop\:ext-flex-none {
                flex: none !important
            }

            .desktop\:ext-flex-shrink-0 {
                flex-shrink: 0 !important
            }

            .desktop\:ext-flex-shrink {
                flex-shrink: 1 !important
            }

            .desktop\:ext-flex-grow-0 {
                flex-grow: 0 !important
            }

            .desktop\:ext-flex-grow {
                flex-grow: 1 !important
            }

            .desktop\:ext-list-none {
                list-style-type: none !important
            }

            .desktop\:ext-grid-cols-1 {
                grid-template-columns:repeat(1, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-3 {
                grid-template-columns:repeat(3, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-4 {
                grid-template-columns:repeat(4, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-5 {
                grid-template-columns:repeat(5, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-6 {
                grid-template-columns:repeat(6, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-7 {
                grid-template-columns:repeat(7, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-8 {
                grid-template-columns:repeat(8, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-9 {
                grid-template-columns:repeat(9, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-10 {
                grid-template-columns:repeat(10, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-11 {
                grid-template-columns:repeat(11, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-12 {
                grid-template-columns:repeat(12, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-none {
                grid-template-columns:none !important
            }

            .desktop\:ext-flex-row {
                flex-direction: row !important
            }

            .desktop\:ext-flex-row-reverse {
                flex-direction: row-reverse !important
            }

            .desktop\:ext-flex-col {
                flex-direction: column !important
            }

            .desktop\:ext-flex-col-reverse {
                flex-direction: column-reverse !important
            }

            .desktop\:ext-flex-wrap {
                flex-wrap: wrap !important
            }

            .desktop\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .desktop\:ext-flex-nowrap {
                flex-wrap: nowrap !important
            }

            .desktop\:ext-items-start {
                align-items: flex-start !important
            }

            .desktop\:ext-items-end {
                align-items: flex-end !important
            }

            .desktop\:ext-items-center {
                align-items: center !important
            }

            .desktop\:ext-items-baseline {
                align-items: baseline !important
            }

            .desktop\:ext-items-stretch {
                align-items: stretch !important
            }

            .desktop\:ext-justify-start {
                justify-content: flex-start !important
            }

            .desktop\:ext-justify-end {
                justify-content: flex-end !important
            }

            .desktop\:ext-justify-center {
                justify-content: center !important
            }

            .desktop\:ext-justify-between {
                justify-content: space-between !important
            }

            .desktop\:ext-justify-around {
                justify-content: space-around !important
            }

            .desktop\:ext-justify-evenly {
                justify-content: space-evenly !important
            }

            .desktop\:ext-justify-items-start {
                justify-items: start !important
            }

            .desktop\:ext-justify-items-end {
                justify-items: end !important
            }

            .desktop\:ext-justify-items-center {
                justify-items: center !important
            }

            .desktop\:ext-justify-items-stretch {
                justify-items: stretch !important
            }

            .desktop\:ext-justify-self-auto {
                justify-self: auto !important
            }

            .desktop\:ext-justify-self-start {
                justify-self: start !important
            }

            .desktop\:ext-justify-self-end {
                justify-self: end !important
            }

            .desktop\:ext-justify-self-center {
                justify-self: center !important
            }

            .desktop\:ext-justify-self-stretch {
                justify-self: stretch !important
            }

            .desktop\:ext-p-0:not([style*=padding]) {
                padding: 0 !important
            }

            .desktop\:ext-p-base:not([style*=padding]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-p-lg:not([style*=padding]) {
                padding: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext-px-0:not([style*=padding]) {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .desktop\:ext-px-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-px-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important;
                padding-right: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext-py-0:not([style*=padding]) {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .desktop\:ext-py-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-py-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large, 3rem) !important;
                padding-top: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext-pt-0:not([style*=padding]) {
                padding-top: 0 !important
            }

            .desktop\:ext-pt-base:not([style*=padding]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pt-lg:not([style*=padding]) {
                padding-top: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext-pr-0:not([style*=padding]) {
                padding-right: 0 !important
            }

            .desktop\:ext-pr-base:not([style*=padding]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pr-lg:not([style*=padding]) {
                padding-right: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext-pb-0:not([style*=padding]) {
                padding-bottom: 0 !important
            }

            .desktop\:ext-pb-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pb-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext-pl-0:not([style*=padding]) {
                padding-left: 0 !important
            }

            .desktop\:ext-pl-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pl-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important
            }

            .desktop\:ext-text-left {
                text-align: left !important
            }

            .desktop\:ext-text-center {
                text-align: center !important
            }

            .desktop\:ext-text-right {
                text-align: right !important
            }
        }

    </style>
    <style class="optimize_css_2" type="text/css" media="all">.wpcf7 .screen-reader-response {
            position: absolute;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            width: 1px;
            margin: -1px;
            padding: 0;
            border: 0;
            word-wrap: normal !important
        }

        .wpcf7 form .wpcf7-response-output {
            margin: 2em .5em 1em;
            padding: .2em 1em;
            border: 2px solid #00a0d2
        }

        .wpcf7 form.init .wpcf7-response-output, .wpcf7 form.resetting .wpcf7-response-output, .wpcf7 form.submitting .wpcf7-response-output {
            display: none
        }

        .wpcf7 form.sent .wpcf7-response-output {
            border-color: #46b450
        }

        .wpcf7 form.failed .wpcf7-response-output, .wpcf7 form.aborted .wpcf7-response-output {
            border-color: #dc3232
        }

        .wpcf7 form.spam .wpcf7-response-output {
            border-color: #f56e28
        }

        .wpcf7 form.invalid .wpcf7-response-output, .wpcf7 form.unaccepted .wpcf7-response-output, .wpcf7 form.payment-required .wpcf7-response-output {
            border-color: #ffb900
        }

        .wpcf7-form-control-wrap {
            position: relative
        }

        .wpcf7-not-valid-tip {
            color: #dc3232;
            font-size: 1em;
            font-weight: 400;
            display: block
        }

        .use-floating-validation-tip .wpcf7-not-valid-tip {
            position: relative;
            top: -2ex;
            left: 1em;
            z-index: 100;
            border: 1px solid #dc3232;
            background: #fff;
            padding: .2em .8em;
            width: 24em
        }

        .wpcf7-list-item {
            display: inline-block;
            margin: 0 0 0 1em
        }

        .wpcf7-list-item-label::before, .wpcf7-list-item-label::after {
            content: " "
        }

        .wpcf7-spinner {
            visibility: hidden;
            display: inline-block;
            background-color: #23282d;
            opacity: .75;
            width: 24px;
            height: 24px;
            border: none;
            border-radius: 100%;
            padding: 0;
            margin: 0 24px;
            position: relative
        }

        form.submitting .wpcf7-spinner {
            visibility: visible
        }

        .wpcf7-spinner::before {
            content: '';
            position: absolute;
            background-color: #fbfbfc;
            top: 4px;
            left: 4px;
            width: 6px;
            height: 6px;
            border: none;
            border-radius: 100%;
            transform-origin: 8px 8px;
            animation-name: spin;
            animation-duration: 1000ms;
            animation-timing-function: linear;
            animation-iteration-count: infinite
        }

        @media (prefers-reduced-motion: reduce) {
            .wpcf7-spinner::before {
                animation-name: blink;
                animation-duration: 2000ms
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes blink {
            from {
                opacity: 0
            }
            50% {
                opacity: 1
            }
            to {
                opacity: 0
            }
        }

        .wpcf7 input[type="file"] {
            cursor: pointer
        }

        .wpcf7 input[type="file"]:disabled {
            cursor: default
        }

        .wpcf7 .wpcf7-submit:disabled {
            cursor: not-allowed
        }

        .wpcf7 input[type="url"], .wpcf7 input[type="email"], .wpcf7 input[type="tel"] {
            direction: ltr
        }</style>
    <style class="optimize_css_2" type="text/css"
           media="all">.fmp-wrapper *, .fmp-wrapper *:before, .fmp-wrapper *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .fmp-container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .fmp-container-fluid {
            margin-right: auto;
            margin-left: auto
        }

        .fmp-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .fmp-row [class^=fmp-col-], .fmp-row [class^=tlp-col-] {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }

        .fmp-col-xs-2, .tlp-col-xs-24 {
            flex: 0 0 20%;
            max-width: 20%
        }

        .fmp-col-xs-1, .tlp-col-xs-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .fmp-col-xs-1, .tlp-col-xs-11 {
            flex: 0 0 91.66666667%;
            max-width: 91.66666667%
        }

        .fmp-col-xs-1, .tlp-col-xs-10 {
            flex: 0 0 83.33333333%;
            max-width: 83.33333333%
        }

        .fmp-col-xs-9, .tlp-col-xs-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .fmp-col-xs-8, .tlp-col-xs-8 {
            flex: 0 0 66.66666667%;
            max-width: 66.66666667%
        }

        .fmp-col-xs-7, .tlp-col-xs-7 {
            flex: 0 0 58.33333333%;
            max-width: 58.33333333%
        }

        .fmp-col-xs-6, .tlp-col-xs-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .fmp-col-xs-5, .tlp-col-xs-5 {
            flex: 0 0 41.66666667%;
            max-width: 41.66666667%
        }

        .fmp-col-xs-4, .tlp-col-xs-4 {
            flex: 0 0 33.33333333%;
            max-width: 33.33333333%
        }

        .fmp-col-xs-3, .tlp-col-xs-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .fmp-col-xs-2, .tlp-col-xs-2 {
            flex: 0 0 16.66666667%;
            max-width: 16.66666667%
        }

        .fmp-col-xs-1, .tlp-col-xs-1 {
            flex: 0 0 8.33333333%;
            max-width: 8.33333333%
        }

        @media (min-width: 768px) {
            .fmp-container {
                max-width: 750px
            }

            .fmp-col-sm-12, .tlp-col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .fmp-col-sm-11, .tlp-col-sm-11 {
                flex: 0 0 91.66666667%;
                max-width: 91.66666667%
            }

            .fmp-col-sm-10, .tlp-col-sm-10 {
                flex: 0 0 83.33333333%;
                max-width: 83.33333333%
            }

            .fmp-col-sm-9, .tlp-col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .fmp-col-sm-8, .tlp-col-sm-8 {
                flex: 0 0 66.66666667%;
                max-width: 66.66666667%
            }

            .fmp-col-sm-7, .tlp-col-sm-7 {
                flex: 0 0 58.33333333%;
                max-width: 58.33333333%
            }

            .fmp-col-sm-6, .tlp-col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .fmp-col-sm-5, .tlp-col-sm-5 {
                flex: 0 0 41.66666667%;
                max-width: 41.66666667%
            }

            .fmp-col-sm-4, .tlp-col-sm-4 {
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%
            }

            .fmp-col-sm-3, .tlp-col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .fmp-col-sm-2, .tlp-col-sm-2 {
                flex: 0 0 16.66666667%;
                max-width: 16.66666667%
            }

            .fmp-col-sm-1, .tlp-col-sm-1 {
                flex: 0 0 8.33333333%;
                max-width: 8.33333333%
            }
        }

        @media (min-width: 992px) {
            .fmp-container {
                max-width: 970px
            }

            .fmp-col-md-24, .tlp-col-md-24 {
                flex: 0 0 20%;
                max-width: 20%
            }

            .fmp-col-md-12, .tlp-col-md-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .fmp-col-md-11, .tlp-col-md-11 {
                flex: 0 0 91.66666667%;
                max-width: 91.66666667%
            }

            .fmp-col-md-10, .tlp-col-md-10 {
                flex: 0 0 83.33333333%;
                max-width: 83.33333333%
            }

            .fmp-col-md-9, .tlp-col-md-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .fmp-col-md-8, .tlp-col-md-8 {
                flex: 0 0 66.66666667%;
                max-width: 66.66666667%
            }

            .fmp-col-md-7, .tlp-col-md-7 {
                flex: 0 0 58.33333333%;
                max-width: 58.33333333%
            }

            .fmp-col-md-6, .tlp-col-md-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .fmp-col-md-5, .tlp-col-md-5 {
                flex: 0 0 41.66666667%;
                max-width: 41.66666667%
            }

            .fmp-col-md-4, .tlp-col-md-4 {
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%
            }

            .fmp-col-md-3, .tlp-col-md-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .fmp-col-md-2, .tlp-col-md-2 {
                flex: 0 0 16.66666667%;
                max-width: 16.66666667%
            }

            .fmp-col-md-1, .tlp-col-md-1 {
                flex: 0 0 8.33333333%;
                max-width: 8.33333333%
            }
        }

        @media (min-width: 1200px) {
            .fmp-container {
                max-width: 1170px
            }

            .fmp-col-lg-24, .tlp-col-lg-24 {
                flex: 0 0 20%;
                max-width: 20%
            }

            .fmp-col-lg-12, .tlp-col-lg-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .fmp-col-lg-11, .tlp-col-lg-11 {
                flex: 0 0 91.66666667%;
                max-width: 91.66666667%
            }

            .fmp-col-lg-10, .tlp-col-lg-10 {
                flex: 0 0 83.33333333%;
                max-width: 83.33333333%
            }

            .fmp-col-lg-9, .tlp-col-lg-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .fmp-col-lg-8, .tlp-col-lg-8 {
                flex: 0 0 66.66666667%;
                max-width: 66.66666667%
            }

            .fmp-col-lg-7, .tlp-col-lg-7 {
                flex: 0 0 58.33333333%;
                max-width: 58.33333333%
            }

            .fmp-col-lg-6, .tlp-col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .fmp-col-lg-5, .tlp-col-lg-5 {
                flex: 0 0 41.66666667%;
                max-width: 41.66666667%
            }

            .fmp-col-lg-4, .tlp-col-lg-4 {
                flex: 0 0 33.33333333%;
                max-width: 33.33333333%
            }

            .fmp-col-lg-3, .tlp-col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .fmp-col-lg-2, .tlp-col-lg-2 {
                flex: 0 0 16.66666667%;
                max-width: 16.66666667%
            }

            .fmp-col-lg-1, .tlp-col-lg-1 {
                flex: 0 0 8.33333333%;
                max-width: 8.33333333%
            }
        }</style>
    <style class="optimize_css_2" type="text/css" media="all">.fmp-archive .fmp-single-item-inner {
            background: #f9f9f9;
            padding-top: 15px;
            overflow: hidden;
            padding-bottom: 15px
        }

        .fmp-archive .fmp-single-item-inner .title {
            position: relative;
            overflow: hidden
        }

        .fmp-archive .fmp-single-item-inner h3 {
            font-size: 24px;
            margin: 0;
            padding: 0 0 10px;
            border: none;
            font-weight: 400;
            box-shadow: none;
            width: 75%;
            float: left
        }

        .fmp-archive .fmp-single-item-inner span.price {
            width: 25%;
            letter-spacing: -1px;
            text-align: right;
            float: right;
            font-size: 20px;
            font-weight: 700
        }

        .fmp #fmp-description {
            margin: 0;
            float: none;
            width: inherit
        }

        .fmp .fmp-images, .fmp .fmp-summery {
            margin-bottom: 2em
        }

        .fmp-single-food-img-wrapper {
            text-align: center
        }

        .fmp-single-food {
            margin-top: 45px
        }

        .fmp-single-food h2 {
            margin: 0;
            padding: 0 0 15px
        }

        .fmp-single-food ul {
            margin: 0 0 30px 30px;
            padding: 0
        }

        .fmp-single-food .offers {
            font-size: 20px;
            line-height: 1.4;
            font-weight: 700;
            margin-bottom: 10px
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item, .fmp-wrapper .fmp-layout-free .fmp-food-item {
            background: #f9f9f9;
            padding: 15px;
            overflow: hidden;
            display: flex;
            margin-bottom: 30px
        }

        .fmp-grid-by-cat-free .fmp-food-item .fmp-image-wrap img, .fmp-layout-free .fmp-food-item .fmp-image-wrap img {
            width: 100%;
            height: auto
        }

        .fmp-grid-by-cat-free .fmp-food-item .fmp-content-wrap, .fmp-layout-free .fmp-food-item .fmp-content-wrap {
            flex: 1
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-title, .fmp-wrapper .fmp-layout-free .fmp-title {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 6px
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item h3, .fmp-wrapper .fmp-layout-free .fmp-food-item h3 {
            font-size: 24px;
            margin: 0;
            padding: 0;
            border: none;
            font-weight: 400;
            box-shadow: none;
            flex: 1
        }

        .fmp-wrapper .fmp-food-item.product h3 {
            width: 100%;
            float: none
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-content-wrap p, .fmp-wrapper .fmp-layout-free .fmp-content-wrap p {
            margin-bottom: 0
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item span.price, .fmp-wrapper .fmp-layout-free .fmp-food-item span.price {
            font-size: 20px;
            font-weight: 700
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item span.price span.fmp-price-amount, .fmp-wrapper .fmp-layout-free .fmp-food-item span.price span.fmp-price-amount {
            margin-left: 5px
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item.product .fmp-title, .fmp-wrapper .fmp-layout-free .fmp-food-item.product .fmp-title {
            margin-bottom: 0
        }

        .fmp-wrapper .fmp-food-item.product span.price {
            width: 100%;
            float: none;
            text-align: left;
            margin-bottom: 2px;
            display: inline-block
        }

        .fmp-wrapper .fmp-food-item.product .button {
            display: inline-block;
            margin: 10px 0 0;
            font-size: 16px;
            padding: 10px 18px;
            line-height: 1.5
        }

        .fmp-wrapper .fmp-grid-by-cat-free h2.fmp-category-title {
            flex: 0 0 100%
        }

        .fmp-wrapper .fmp-grid-by-cat-free .fmp-category-title {
            font-size: 32px;
            margin: 0;
            padding: 15px
        }

        .widget_fmp .fmp-wrapper .fmp-grid-by-cat-free .fmp-title, .widget_fmp .fmp-wrapper .fmp-layout-free .fmp-title {
            margin-bottom: 0
        }

        .widget_fmp .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item h3, .widget_fmp .fmp-wrapper .fmp-layout-free .fmp-food-item h3 {
            width: 100%
        }

        .widget_fmp .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item span.price, .widget_fmp .fmp-wrapper .fmp-layout-free .fmp-food-item span.price {
            width: 100%;
            text-align: left;
            padding: 0
        }

        .widget_fmp .fmp-wrapper .fmp-grid-by-cat-free .fmp-category-title {
            font-size: 24px
        }

        @media (min-width: 768px) {
            .widget_fmp .fmp-food-item .fmp-image-wrap {
                flex: 0 0 25%;
                margin-right: 15px
            }
        }

        @media (min-width: 768px) {
            .fmp-food-item .fmp-image-wrap {
                flex: 0 0 28%;
                margin-right: 25px
            }
        }

        @media (max-width: 767px) {
            .fmp-archive .fmp-single-item-inner .image-area {
                margin-bottom: 15px
            }

            .paddingl0 {
                padding-left: 0;
                padding-right: 0
            }

            .fmp .title {
                padding-top: 15px
            }

            .fmp-wrapper span.price {
                font-size: 16px
            }

            .fmp-wrapper .fmp-food-item {
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }

            .fmp-wrapper .fmp-food-item .fmp-image-wrap {
                margin-right: 20px;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 35%;
                flex: 0 0 35%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }

            .fmp-wrapper .fmp-grid-by-cat-free .fmp-title, .fmp-wrapper .fmp-layout-free .fmp-title {
                display: block;
                margin-bottom: 0
            }

            .fmp-wrapper .fmp-grid-by-cat-free .fmp-title h3, .fmp-wrapper .fmp-layout-free .fmp-title h3 {
                width: 100%
            }

            .fmp-wrapper .fmp-grid-by-cat-free .fmp-food-item span.price, .fmp-wrapper .fmp-layout-free .fmp-food-item span.price {
                width: 100%;
                text-align: left
            }
        }

        @media (max-width: 768px) {
            .fmp span.price {
                font-size: 16px
            }

            .fmp-media .fmp-pull-left {
                float: none !important;
                display: block;
                text-align: center;
                margin-bottom: 15px;
                padding-right: 0
            }
        }

        @media only screen and (max-width: 479px) {
            .fmp-wrapper .fmp-food-item .fmp-image-wrap img {
                max-width: 120px
            }

            .fmp-wrapper .fmp-grid-by-cat-free .fmp-title + p, .fmp-wrapper .fmp-layout-free .fmp-title + p {
                display: none
            }

            .fmp-cat1 .fmp-box ul.menu-list li .fmp-media {
                text-align: center
            }

            .fmp-cat1 .fmp-box ul.menu-list li .fmp-pull-left {
                float: none !important;
                padding-right: 0
            }

            .fmp-cat1 .fmp-box ul.menu-list li .fmp-media-body h3 {
                border: 0;
                padding: 0
            }

            .fmp-cat1 .fmp-box ul.menu-list li:not(:last-child) {
                padding-bottom: 20px;
                border-bottom: 1px dashed #707070
            }
        }</style>
    <style class="optimize_css_2" type="text/css" media="all">:root {
            --woocommerce: #a46497;
            --wc-green: #7ad03a;
            --wc-red: #a00;
            --wc-orange: #ffba00;
            --wc-blue: #2ea2cc;
            --wc-primary: #a46497;
            --wc-primary-text: white;
            --wc-secondary: #ebe9eb;
            --wc-secondary-text: #515151;
            --wc-highlight: #77a464;
            --wc-highligh-text: white;
            --wc-content-bg: #fff;
            --wc-subtext: #767676
        }

        .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button, .woocommerce-page .woocommerce-error .button, .woocommerce-page .woocommerce-info .button, .woocommerce-page .woocommerce-message .button {
            float: right
        }

        .woocommerce .col2-set, .woocommerce-page .col2-set {
            width: 100%
        }

        .woocommerce .col2-set::after, .woocommerce .col2-set::before, .woocommerce-page .col2-set::after, .woocommerce-page .col2-set::before {
            content: " ";
            display: table
        }

        .woocommerce .col2-set::after, .woocommerce-page .col2-set::after {
            clear: both
        }

        .woocommerce .col2-set .col-1, .woocommerce-page .col2-set .col-1 {
            float: left;
            width: 48%
        }

        .woocommerce .col2-set .col-2, .woocommerce-page .col2-set .col-2 {
            float: right;
            width: 48%
        }

        .woocommerce img, .woocommerce-page img {
            height: auto;
            max-width: 100%
        }

        .woocommerce #content div.product div.images, .woocommerce div.product div.images, .woocommerce-page #content div.product div.images, .woocommerce-page div.product div.images {
            float: left;
            width: 48%
        }

        .woocommerce #content div.product div.thumbnails::after, .woocommerce #content div.product div.thumbnails::before, .woocommerce div.product div.thumbnails::after, .woocommerce div.product div.thumbnails::before, .woocommerce-page #content div.product div.thumbnails::after, .woocommerce-page #content div.product div.thumbnails::before, .woocommerce-page div.product div.thumbnails::after, .woocommerce-page div.product div.thumbnails::before {
            content: " ";
            display: table
        }

        .woocommerce #content div.product div.thumbnails::after, .woocommerce div.product div.thumbnails::after, .woocommerce-page #content div.product div.thumbnails::after, .woocommerce-page div.product div.thumbnails::after {
            clear: both
        }

        .woocommerce #content div.product div.thumbnails a, .woocommerce div.product div.thumbnails a, .woocommerce-page #content div.product div.thumbnails a, .woocommerce-page div.product div.thumbnails a {
            float: left;
            width: 30.75%;
            margin-right: 3.8%;
            margin-bottom: 1em
        }

        .woocommerce #content div.product div.thumbnails a.last, .woocommerce div.product div.thumbnails a.last, .woocommerce-page #content div.product div.thumbnails a.last, .woocommerce-page div.product div.thumbnails a.last {
            margin-right: 0
        }

        .woocommerce #content div.product div.thumbnails a.first, .woocommerce div.product div.thumbnails a.first, .woocommerce-page #content div.product div.thumbnails a.first, .woocommerce-page div.product div.thumbnails a.first {
            clear: both
        }

        .woocommerce #content div.product div.thumbnails.columns-1 a, .woocommerce div.product div.thumbnails.columns-1 a, .woocommerce-page #content div.product div.thumbnails.columns-1 a, .woocommerce-page div.product div.thumbnails.columns-1 a {
            width: 100%;
            margin-right: 0;
            float: none
        }

        .woocommerce #content div.product div.thumbnails.columns-2 a, .woocommerce div.product div.thumbnails.columns-2 a, .woocommerce-page #content div.product div.thumbnails.columns-2 a, .woocommerce-page div.product div.thumbnails.columns-2 a {
            width: 48%
        }

        .woocommerce #content div.product div.thumbnails.columns-4 a, .woocommerce div.product div.thumbnails.columns-4 a, .woocommerce-page #content div.product div.thumbnails.columns-4 a, .woocommerce-page div.product div.thumbnails.columns-4 a {
            width: 22.05%
        }

        .woocommerce #content div.product div.thumbnails.columns-5 a, .woocommerce div.product div.thumbnails.columns-5 a, .woocommerce-page #content div.product div.thumbnails.columns-5 a, .woocommerce-page div.product div.thumbnails.columns-5 a {
            width: 16.9%
        }

        .woocommerce #content div.product div.summary, .woocommerce div.product div.summary, .woocommerce-page #content div.product div.summary, .woocommerce-page div.product div.summary {
            float: right;
            width: 48%;
            clear: none
        }

        .woocommerce #content div.product .woocommerce-tabs, .woocommerce div.product .woocommerce-tabs, .woocommerce-page #content div.product .woocommerce-tabs, .woocommerce-page div.product .woocommerce-tabs {
            clear: both
        }

        .woocommerce #content div.product .woocommerce-tabs ul.tabs::after, .woocommerce #content div.product .woocommerce-tabs ul.tabs::before, .woocommerce div.product .woocommerce-tabs ul.tabs::after, .woocommerce div.product .woocommerce-tabs ul.tabs::before, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs::after, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs::before, .woocommerce-page div.product .woocommerce-tabs ul.tabs::after, .woocommerce-page div.product .woocommerce-tabs ul.tabs::before {
            content: " ";
            display: table
        }

        .woocommerce #content div.product .woocommerce-tabs ul.tabs::after, .woocommerce div.product .woocommerce-tabs ul.tabs::after, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs::after, .woocommerce-page div.product .woocommerce-tabs ul.tabs::after {
            clear: both
        }

        .woocommerce #content div.product .woocommerce-tabs ul.tabs li, .woocommerce div.product .woocommerce-tabs ul.tabs li, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li, .woocommerce-page div.product .woocommerce-tabs ul.tabs li {
            display: inline-block
        }

        .woocommerce #content div.product #reviews .comment::after, .woocommerce #content div.product #reviews .comment::before, .woocommerce div.product #reviews .comment::after, .woocommerce div.product #reviews .comment::before, .woocommerce-page #content div.product #reviews .comment::after, .woocommerce-page #content div.product #reviews .comment::before, .woocommerce-page div.product #reviews .comment::after, .woocommerce-page div.product #reviews .comment::before {
            content: " ";
            display: table
        }

        .woocommerce #content div.product #reviews .comment::after, .woocommerce div.product #reviews .comment::after, .woocommerce-page #content div.product #reviews .comment::after, .woocommerce-page div.product #reviews .comment::after {
            clear: both
        }

        .woocommerce #content div.product #reviews .comment img, .woocommerce div.product #reviews .comment img, .woocommerce-page #content div.product #reviews .comment img, .woocommerce-page div.product #reviews .comment img {
            float: right;
            height: auto
        }

        .woocommerce ul.products, .woocommerce-page ul.products {
            clear: both
        }

        .woocommerce ul.products::after, .woocommerce ul.products::before, .woocommerce-page ul.products::after, .woocommerce-page ul.products::before {
            content: " ";
            display: table
        }

        .woocommerce ul.products::after, .woocommerce-page ul.products::after {
            clear: both
        }

        .woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
            float: left;
            margin: 0 3.8% 2.992em 0;
            padding: 0;
            position: relative;
            width: 22.05%;
            margin-left: 0
        }

        .woocommerce ul.products li.first, .woocommerce-page ul.products li.first {
            clear: both
        }

        .woocommerce ul.products li.last, .woocommerce-page ul.products li.last {
            margin-right: 0
        }

        .woocommerce ul.products.columns-1 li.product, .woocommerce-page ul.products.columns-1 li.product {
            width: 100%;
            margin-right: 0
        }

        .woocommerce ul.products.columns-2 li.product, .woocommerce-page ul.products.columns-2 li.product {
            width: 48%
        }

        .woocommerce ul.products.columns-3 li.product, .woocommerce-page ul.products.columns-3 li.product {
            width: 30.75%
        }

        .woocommerce ul.products.columns-5 li.product, .woocommerce-page ul.products.columns-5 li.product {
            width: 16.95%
        }

        .woocommerce ul.products.columns-6 li.product, .woocommerce-page ul.products.columns-6 li.product {
            width: 13.5%
        }

        .woocommerce-page.columns-1 ul.products li.product, .woocommerce.columns-1 ul.products li.product {
            width: 100%;
            margin-right: 0
        }

        .woocommerce-page.columns-2 ul.products li.product, .woocommerce.columns-2 ul.products li.product {
            width: 48%
        }

        .woocommerce-page.columns-3 ul.products li.product, .woocommerce.columns-3 ul.products li.product {
            width: 30.75%
        }

        .woocommerce-page.columns-5 ul.products li.product, .woocommerce.columns-5 ul.products li.product {
            width: 16.95%
        }

        .woocommerce-page.columns-6 ul.products li.product, .woocommerce.columns-6 ul.products li.product {
            width: 13.5%
        }

        .woocommerce .woocommerce-result-count, .woocommerce-page .woocommerce-result-count {
            float: left
        }

        .woocommerce .woocommerce-ordering, .woocommerce-page .woocommerce-ordering {
            float: right
        }

        .woocommerce .woocommerce-pagination ul.page-numbers::after, .woocommerce .woocommerce-pagination ul.page-numbers::before, .woocommerce-page .woocommerce-pagination ul.page-numbers::after, .woocommerce-page .woocommerce-pagination ul.page-numbers::before {
            content: " ";
            display: table
        }

        .woocommerce .woocommerce-pagination ul.page-numbers::after, .woocommerce-page .woocommerce-pagination ul.page-numbers::after {
            clear: both
        }

        .woocommerce .woocommerce-pagination ul.page-numbers li, .woocommerce-page .woocommerce-pagination ul.page-numbers li {
            display: inline-block
        }

        .woocommerce #content table.cart img, .woocommerce table.cart img, .woocommerce-page #content table.cart img, .woocommerce-page table.cart img {
            height: auto
        }

        .woocommerce #content table.cart td.actions, .woocommerce table.cart td.actions, .woocommerce-page #content table.cart td.actions, .woocommerce-page table.cart td.actions {
            text-align: right
        }

        .woocommerce #content table.cart td.actions .input-text, .woocommerce table.cart td.actions .input-text, .woocommerce-page #content table.cart td.actions .input-text, .woocommerce-page table.cart td.actions .input-text {
            width: 80px
        }

        .woocommerce #content table.cart td.actions .coupon, .woocommerce table.cart td.actions .coupon, .woocommerce-page #content table.cart td.actions .coupon, .woocommerce-page table.cart td.actions .coupon {
            float: left
        }

        .woocommerce #content table.cart td.actions .coupon label, .woocommerce table.cart td.actions .coupon label, .woocommerce-page #content table.cart td.actions .coupon label, .woocommerce-page table.cart td.actions .coupon label {
            display: none
        }

        .woocommerce .cart-collaterals, .woocommerce-page .cart-collaterals {
            width: 100%
        }

        .woocommerce .cart-collaterals::after, .woocommerce .cart-collaterals::before, .woocommerce-page .cart-collaterals::after, .woocommerce-page .cart-collaterals::before {
            content: " ";
            display: table
        }

        .woocommerce .cart-collaterals::after, .woocommerce-page .cart-collaterals::after {
            clear: both
        }

        .woocommerce .cart-collaterals .related, .woocommerce-page .cart-collaterals .related {
            width: 30.75%;
            float: left
        }

        .woocommerce .cart-collaterals .cross-sells, .woocommerce-page .cart-collaterals .cross-sells {
            width: 48%;
            float: left
        }

        .woocommerce .cart-collaterals .cross-sells ul.products, .woocommerce-page .cart-collaterals .cross-sells ul.products {
            float: none
        }

        .woocommerce .cart-collaterals .cross-sells ul.products li, .woocommerce-page .cart-collaterals .cross-sells ul.products li {
            width: 48%
        }

        .woocommerce .cart-collaterals .shipping_calculator, .woocommerce-page .cart-collaterals .shipping_calculator {
            width: 48%;
            clear: right;
            float: right
        }

        .woocommerce .cart-collaterals .shipping_calculator::after, .woocommerce .cart-collaterals .shipping_calculator::before, .woocommerce-page .cart-collaterals .shipping_calculator::after, .woocommerce-page .cart-collaterals .shipping_calculator::before {
            content: " ";
            display: table
        }

        .woocommerce .cart-collaterals .shipping_calculator::after, .woocommerce-page .cart-collaterals .shipping_calculator::after {
            clear: both
        }

        .woocommerce .cart-collaterals .shipping_calculator .col2-set .col-1, .woocommerce .cart-collaterals .shipping_calculator .col2-set .col-2, .woocommerce-page .cart-collaterals .shipping_calculator .col2-set .col-1, .woocommerce-page .cart-collaterals .shipping_calculator .col2-set .col-2 {
            width: 47%
        }

        .woocommerce .cart-collaterals .cart_totals, .woocommerce-page .cart-collaterals .cart_totals {
            float: right;
            width: 48%
        }

        .woocommerce ul.cart_list li::after, .woocommerce ul.cart_list li::before, .woocommerce ul.product_list_widget li::after, .woocommerce ul.product_list_widget li::before, .woocommerce-page ul.cart_list li::after, .woocommerce-page ul.cart_list li::before, .woocommerce-page ul.product_list_widget li::after, .woocommerce-page ul.product_list_widget li::before {
            content: " ";
            display: table
        }

        .woocommerce ul.cart_list li::after, .woocommerce ul.product_list_widget li::after, .woocommerce-page ul.cart_list li::after, .woocommerce-page ul.product_list_widget li::after {
            clear: both
        }

        .woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li img, .woocommerce-page ul.cart_list li img, .woocommerce-page ul.product_list_widget li img {
            float: right;
            height: auto
        }

        .woocommerce form .form-row::after, .woocommerce form .form-row::before, .woocommerce-page form .form-row::after, .woocommerce-page form .form-row::before {
            content: " ";
            display: table
        }

        .woocommerce form .form-row::after, .woocommerce-page form .form-row::after {
            clear: both
        }

        .woocommerce form .form-row label, .woocommerce-page form .form-row label {
            display: block
        }

        .woocommerce form .form-row label.checkbox, .woocommerce-page form .form-row label.checkbox {
            display: inline
        }

        .woocommerce form .form-row select, .woocommerce-page form .form-row select {
            width: 100%
        }

        .woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text {
            box-sizing: border-box;
            width: 100%
        }

        .woocommerce form .form-row-first, .woocommerce form .form-row-last, .woocommerce-page form .form-row-first, .woocommerce-page form .form-row-last {
            width: 47%;
            overflow: visible
        }

        .woocommerce form .form-row-first, .woocommerce-page form .form-row-first {
            float: left
        }

        .woocommerce form .form-row-last, .woocommerce-page form .form-row-last {
            float: right
        }

        .woocommerce form .form-row-wide, .woocommerce-page form .form-row-wide {
            clear: both
        }

        .woocommerce form .password-input, .woocommerce-page form .password-input {
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative
        }

        .woocommerce form .password-input input[type=password], .woocommerce-page form .password-input input[type=password] {
            padding-right: 2.5rem
        }

        .woocommerce form .password-input input::-ms-reveal, .woocommerce-page form .password-input input::-ms-reveal {
            display: none
        }

        .woocommerce form .show-password-input, .woocommerce-page form .show-password-input {
            position: absolute;
            right: .7em;
            top: .7em;
            cursor: pointer
        }

        .woocommerce form .show-password-input::after, .woocommerce-page form .show-password-input::after {
            font-family: WooCommerce;
            speak: never;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            margin-left: .618em;
            content: "\e010";
            text-decoration: none
        }

        .woocommerce form .show-password-input.display-password::after, .woocommerce-page form .show-password-input.display-password::after {
            color: #585858
        }

        .woocommerce #payment .form-row select, .woocommerce-page #payment .form-row select {
            width: auto
        }

        .woocommerce #payment .terms, .woocommerce #payment .wc-terms-and-conditions, .woocommerce-page #payment .terms, .woocommerce-page #payment .wc-terms-and-conditions {
            text-align: left;
            padding: 0 1em 0 0;
            float: left
        }

        .woocommerce #payment #place_order, .woocommerce-page #payment #place_order {
            float: right
        }

        .woocommerce .woocommerce-billing-fields::after, .woocommerce .woocommerce-billing-fields::before, .woocommerce .woocommerce-shipping-fields::after, .woocommerce .woocommerce-shipping-fields::before, .woocommerce-page .woocommerce-billing-fields::after, .woocommerce-page .woocommerce-billing-fields::before, .woocommerce-page .woocommerce-shipping-fields::after, .woocommerce-page .woocommerce-shipping-fields::before {
            content: " ";
            display: table
        }

        .woocommerce .woocommerce-billing-fields::after, .woocommerce .woocommerce-shipping-fields::after, .woocommerce-page .woocommerce-billing-fields::after, .woocommerce-page .woocommerce-shipping-fields::after {
            clear: both
        }

        .woocommerce .woocommerce-terms-and-conditions, .woocommerce-page .woocommerce-terms-and-conditions {
            margin-bottom: 1.618em;
            padding: 1.618em
        }

        .woocommerce .woocommerce-oembed, .woocommerce-page .woocommerce-oembed {
            position: relative
        }

        .woocommerce-account .woocommerce-MyAccount-navigation {
            float: left;
            width: 30%
        }

        .woocommerce-account .woocommerce-MyAccount-content {
            float: right;
            width: 68%
        }

        .woocommerce-page.left-sidebar #content.twentyeleven {
            width: 58.4%;
            margin: 0 7.6%;
            float: right
        }

        .woocommerce-page.right-sidebar #content.twentyeleven {
            margin: 0 7.6%;
            width: 58.4%;
            float: left
        }

        .twentyfourteen .tfwc {
            padding: 12px 10px 0;
            max-width: 474px;
            margin: 0 auto
        }

        .twentyfourteen .tfwc .product .entry-summary {
            padding: 0 !important;
            margin: 0 0 1.618em !important
        }

        .twentyfourteen .tfwc div.product.hentry.has-post-thumbnail {
            margin-top: 0
        }

        @media screen and (min-width: 673px) {
            .twentyfourteen .tfwc {
                padding-right: 30px;
                padding-left: 30px
            }
        }

        @media screen and (min-width: 1040px) {
            .twentyfourteen .tfwc {
                padding-right: 15px;
                padding-left: 15px
            }
        }

        @media screen and (min-width: 1110px) {
            .twentyfourteen .tfwc {
                padding-right: 30px;
                padding-left: 30px
            }
        }

        @media screen and (min-width: 1218px) {
            .twentyfourteen .tfwc {
                margin-right: 54px
            }

            .full-width .twentyfourteen .tfwc {
                margin-right: auto
            }
        }

        .twentyfifteen .t15wc {
            padding-left: 7.6923%;
            padding-right: 7.6923%;
            padding-top: 7.6923%;
            margin-bottom: 7.6923%;
            background: #fff;
            box-shadow: 0 0 1px rgba(0, 0, 0, .15)
        }

        .twentyfifteen .t15wc .page-title {
            margin-left: 0
        }

        @media screen and (min-width: 38.75em) {
            .twentyfifteen .t15wc {
                margin-right: 7.6923%;
                margin-left: 7.6923%;
                margin-top: 8.3333%
            }
        }

        @media screen and (min-width: 59.6875em) {
            .twentyfifteen .t15wc {
                margin-left: 8.3333%;
                margin-right: 8.3333%;
                padding: 10%
            }

            .single-product .twentyfifteen .entry-summary {
                padding: 0 !important
            }
        }

        .twentysixteen .site-main {
            margin-right: 7.6923%;
            margin-left: 7.6923%
        }

        .twentysixteen .entry-summary {
            margin-right: 0;
            margin-left: 0
        }

        #content .twentysixteen div.product div.images, #content .twentysixteen div.product div.summary {
            width: 46.42857%
        }

        @media screen and (min-width: 44.375em) {
            .twentysixteen .site-main {
                margin-right: 23.0769%
            }
        }

        @media screen and (min-width: 56.875em) {
            .twentysixteen .site-main {
                margin-right: 0;
                margin-left: 0
            }

            .no-sidebar .twentysixteen .site-main {
                margin-right: 15%;
                margin-left: 15%
            }

            .no-sidebar .twentysixteen .entry-summary {
                margin-right: 0;
                margin-left: 0
            }
        }

        .rtl .woocommerce .col2-set .col-1, .rtl .woocommerce-page .col2-set .col-1 {
            float: right
        }

        .rtl .woocommerce .col2-set .col-2, .rtl .woocommerce-page .col2-set .col-2 {
            float: left
        }</style>
    <style class="optimize_css_2" type="text/css" media="only screen and (max-width: 767px)">:root {
            --woocommerce: #a46497;
            --wc-green: #7ad03a;
            --wc-red: #a00;
            --wc-orange: #ffba00;
            --wc-blue: #2ea2cc;
            --wc-primary: #a46497;
            --wc-primary-text: white;
            --wc-secondary: #ebe9eb;
            --wc-secondary-text: #515151;
            --wc-highlight: #77a464;
            --wc-highligh-text: white;
            --wc-content-bg: #fff;
            --wc-subtext: #767676
        }

        .woocommerce table.shop_table_responsive thead, .woocommerce-page table.shop_table_responsive thead {
            display: none
        }

        .woocommerce table.shop_table_responsive tbody tr:first-child td:first-child, .woocommerce-page table.shop_table_responsive tbody tr:first-child td:first-child {
            border-top: 0
        }

        .woocommerce table.shop_table_responsive tbody th, .woocommerce-page table.shop_table_responsive tbody th {
            display: none
        }

        .woocommerce table.shop_table_responsive tr, .woocommerce-page table.shop_table_responsive tr {
            display: block
        }

        .woocommerce table.shop_table_responsive tr td, .woocommerce-page table.shop_table_responsive tr td {
            display: block;
            text-align: right !important
        }

        .woocommerce table.shop_table_responsive tr td.order-actions, .woocommerce-page table.shop_table_responsive tr td.order-actions {
            text-align: left !important
        }

        .woocommerce table.shop_table_responsive tr td::before, .woocommerce-page table.shop_table_responsive tr td::before {
            content: attr(data-title) ": ";
            font-weight: 700;
            float: left
        }

        .woocommerce table.shop_table_responsive tr td.actions::before, .woocommerce table.shop_table_responsive tr td.product-remove::before, .woocommerce-page table.shop_table_responsive tr td.actions::before, .woocommerce-page table.shop_table_responsive tr td.product-remove::before {
            display: none
        }

        .woocommerce table.shop_table_responsive tr:nth-child(2n) td, .woocommerce-page table.shop_table_responsive tr:nth-child(2n) td {
            background-color: rgba(0, 0, 0, .025)
        }

        .woocommerce table.my_account_orders tr td.order-actions, .woocommerce-page table.my_account_orders tr td.order-actions {
            text-align: left
        }

        .woocommerce table.my_account_orders tr td.order-actions::before, .woocommerce-page table.my_account_orders tr td.order-actions::before {
            display: none
        }

        .woocommerce table.my_account_orders tr td.order-actions .button, .woocommerce-page table.my_account_orders tr td.order-actions .button {
            float: none;
            margin: .125em .25em .125em 0
        }

        .woocommerce .col2-set .col-1, .woocommerce .col2-set .col-2, .woocommerce-page .col2-set .col-1, .woocommerce-page .col2-set .col-2 {
            float: none;
            width: 100%
        }

        .woocommerce ul.products[class*=columns-] li.product, .woocommerce-page ul.products[class*=columns-] li.product {
            width: 48%;
            float: left;
            clear: both;
            margin: 0 0 2.992em
        }

        .woocommerce ul.products[class*=columns-] li.product:nth-child(2n), .woocommerce-page ul.products[class*=columns-] li.product:nth-child(2n) {
            float: right;
            clear: none !important
        }

        .woocommerce #content div.product div.images, .woocommerce #content div.product div.summary, .woocommerce div.product div.images, .woocommerce div.product div.summary, .woocommerce-page #content div.product div.images, .woocommerce-page #content div.product div.summary, .woocommerce-page div.product div.images, .woocommerce-page div.product div.summary {
            float: none;
            width: 100%
        }

        .woocommerce #content table.cart .product-thumbnail, .woocommerce table.cart .product-thumbnail, .woocommerce-page #content table.cart .product-thumbnail, .woocommerce-page table.cart .product-thumbnail {
            display: none
        }

        .woocommerce #content table.cart td.actions, .woocommerce table.cart td.actions, .woocommerce-page #content table.cart td.actions, .woocommerce-page table.cart td.actions {
            text-align: left
        }

        .woocommerce #content table.cart td.actions .coupon, .woocommerce table.cart td.actions .coupon, .woocommerce-page #content table.cart td.actions .coupon, .woocommerce-page table.cart td.actions .coupon {
            float: none;
            padding-bottom: .5em
        }

        .woocommerce #content table.cart td.actions .coupon::after, .woocommerce #content table.cart td.actions .coupon::before, .woocommerce table.cart td.actions .coupon::after, .woocommerce table.cart td.actions .coupon::before, .woocommerce-page #content table.cart td.actions .coupon::after, .woocommerce-page #content table.cart td.actions .coupon::before, .woocommerce-page table.cart td.actions .coupon::after, .woocommerce-page table.cart td.actions .coupon::before {
            content: " ";
            display: table
        }

        .woocommerce #content table.cart td.actions .coupon::after, .woocommerce table.cart td.actions .coupon::after, .woocommerce-page #content table.cart td.actions .coupon::after, .woocommerce-page table.cart td.actions .coupon::after {
            clear: both
        }

        .woocommerce #content table.cart td.actions .coupon .button, .woocommerce #content table.cart td.actions .coupon .input-text, .woocommerce #content table.cart td.actions .coupon input, .woocommerce table.cart td.actions .coupon .button, .woocommerce table.cart td.actions .coupon .input-text, .woocommerce table.cart td.actions .coupon input, .woocommerce-page #content table.cart td.actions .coupon .button, .woocommerce-page #content table.cart td.actions .coupon .input-text, .woocommerce-page #content table.cart td.actions .coupon input, .woocommerce-page table.cart td.actions .coupon .button, .woocommerce-page table.cart td.actions .coupon .input-text, .woocommerce-page table.cart td.actions .coupon input {
            width: 48%;
            box-sizing: border-box
        }

        .woocommerce #content table.cart td.actions .coupon .button.alt, .woocommerce #content table.cart td.actions .coupon .input-text + .button, .woocommerce table.cart td.actions .coupon .button.alt, .woocommerce table.cart td.actions .coupon .input-text + .button, .woocommerce-page #content table.cart td.actions .coupon .button.alt, .woocommerce-page #content table.cart td.actions .coupon .input-text + .button, .woocommerce-page table.cart td.actions .coupon .button.alt, .woocommerce-page table.cart td.actions .coupon .input-text + .button {
            float: right
        }

        .woocommerce #content table.cart td.actions .button, .woocommerce table.cart td.actions .button, .woocommerce-page #content table.cart td.actions .button, .woocommerce-page table.cart td.actions .button {
            display: block;
            width: 100%
        }

        .woocommerce .cart-collaterals .cart_totals, .woocommerce .cart-collaterals .cross-sells, .woocommerce .cart-collaterals .shipping_calculator, .woocommerce-page .cart-collaterals .cart_totals, .woocommerce-page .cart-collaterals .cross-sells, .woocommerce-page .cart-collaterals .shipping_calculator {
            width: 100%;
            float: none;
            text-align: left
        }

        .woocommerce-page.woocommerce-checkout form.login .form-row, .woocommerce.woocommerce-checkout form.login .form-row {
            width: 100%;
            float: none
        }

        .woocommerce #payment .terms, .woocommerce-page #payment .terms {
            text-align: left;
            padding: 0
        }

        .woocommerce #payment #place_order, .woocommerce-page #payment #place_order {
            float: none;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 1em
        }

        .woocommerce .lost_reset_password .form-row-first, .woocommerce .lost_reset_password .form-row-last, .woocommerce-page .lost_reset_password .form-row-first, .woocommerce-page .lost_reset_password .form-row-last {
            width: 100%;
            float: none;
            margin-right: 0
        }

        .woocommerce-account .woocommerce-MyAccount-content, .woocommerce-account .woocommerce-MyAccount-navigation {
            float: none;
            width: 100%
        }

        .single-product .twentythirteen .panel {
            padding-left: 20px !important;
            padding-right: 20px !important
        }</style>
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <style class="optimize_css_2" type="text/css" media="all">.rt-container * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .rt-container *:before, .rt-container *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .rt-container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .rt-container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .rt-container-container ul {
            margin: 0
        }

        .rt-container-container i {
            margin-right: 5px
        }

        .clearfix:before, .clearfix:after, .rt-container:before, .rt-container:after, .rt-container-fluid:before, .rt-container-fluid:after, .rt-row:before, .rt-row:after {
            content: " ";
            display: table
        }

        .clearfix:after, .rt-container:after, .rt-container-fluid:after, .rt-row:after {
            clear: both
        }

        .rt-row {
            margin-left: -15px;
            margin-right: -15px
        }

        .rt-col-xs-1, .rt-col-sm-1, .rt-col-md-1, .rt-col-lg-1, .rt-col-xs-2, .rt-col-sm-2, .rt-col-md-2, .rt-col-lg-2, .rt-col-xs-3, .rt-col-sm-3, .rt-col-md-3, .rt-col-lg-3, .rt-col-xs-4, .rt-col-sm-4, .rt-col-md-4, .rt-col-lg-4, .rt-col-xs-5, .rt-col-sm-5, .rt-col-md-5, .rt-col-lg-5, .rt-col-xs-6, .rt-col-sm-6, .rt-col-md-6, .rt-col-lg-6, .rt-col-xs-7, .rt-col-sm-7, .rt-col-md-7, .rt-col-lg-7, .rt-col-xs-8, .rt-col-sm-8, .rt-col-md-8, .rt-col-lg-8, .rt-col-xs-9, .rt-col-sm-9, .rt-col-md-9, .rt-col-lg-9, .rt-col-xs-10, .rt-col-sm-10, .rt-col-md-10, .rt-col-lg-10, .rt-col-xs-11, .rt-col-sm-11, .rt-col-md-11, .rt-col-lg-11, .rt-col-xs-12, .rt-col-sm-12, .rt-col-md-12, .rt-col-lg-12, .rt-col-lg-24, .rt-col-md-24, .rt-col-sm-24, .rt-col-xs-24 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px
        }

        .rt-col-xs-1, .rt-col-xs-2, .rt-col-xs-3, .rt-col-xs-4, .rt-col-xs-5, .rt-col-xs-6, .rt-col-xs-7, .rt-col-xs-8, .rt-col-xs-9, .rt-col-xs-10, .rt-col-xs-11, .rt-col-xs-12, .rt-col-xs-14 {
            float: left
        }

        .rt-col-xs-24 {
            width: 20%
        }

        .rt-col-xs-12 {
            width: 100%
        }

        .rt-col-xs-11 {
            width: 91.66666667%
        }

        .rt-col-xs-10 {
            width: 83.33333333%
        }

        .rt-col-xs-9 {
            width: 75%
        }

        .rt-col-xs-8 {
            width: 66.66666667%
        }

        .rt-col-xs-7 {
            width: 58.33333333%
        }

        .rt-col-xs-6 {
            width: 50%
        }

        .rt-col-xs-5 {
            width: 41.66666667%
        }

        .rt-col-xs-4 {
            width: 33.33333333%
        }

        .rt-col-xs-3 {
            width: 25%
        }

        .rt-col-xs-2 {
            width: 16.66666667%
        }

        .rt-col-xs-1 {
            width: 8.33333333%
        }

        .rt-wpls .img-responsive {
            max-width: 100%;
            width: 100%;
            display: block
        }

        .single-logo.wls-tooltip {
            position: relative
        }

        .rt-wpls .single-logo h3 {
            margin: 5px 0 10px
        }

        .rt-wpls .single-logo a {
            box-shadow: none
        }

        .rt-wpls .single-logo a:focus {
            outline: 0
        }

        .rt-wpls .single-logo {
            display: table;
            text-align: center;
            vertical-align: middle;
            position: relative;
            margin: 0;
            width: 100%
        }

        .rt-wpls .single-logo img {
            max-width: 100%;
            display: inline-block
        }

        body.wls_ie .rt-wpls .single-logo img {
            width: 100%
        }

        .rt-wpls .single-logo .single-logo-container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            padding: 20px 10px
        }

        .single-logo-container > * {
            text-align: center;
            display: block;
            vertical-align: middle
        }

        .isotope-layout .button-group {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .rt-wpls button {
            margin-right: 5px;
            border: 0 !important;
            box-shadow: none !important;
            text-shadow: none !important;
            margin-bottom: 10px;
            padding: 8px 15px;
            border-radius: 3px;
            cursor: pointer
        }

        .rt-wpls button:focus {
            outline: 0;
            border: none
        }

        .rt-wpls .wls-isotope-button button:last-child {
            margin-right: 0
        }

        .rt-wpls.rt-loading {
            height: 100px
        }

        .rt-wpls.rt-loading .wpls-carousel {
            display: none;
            opacity: 0;
            transition: all .5s
        }

        .rt-wpls.rt-loading:after {
            border: 5px solid #f3f3f3;
            -webkit-animation: spin 1s linear infinite;
            animation: spin 1s linear infinite;
            border-top: 5px solid #555;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin: 25px auto 0
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        .wls-boxhighlight {
            transition: all .5s
        }

        .wls-boxhighlight:hover {
            -webkit-box-shadow: 0 0 10px #ccc;
            -moz-box-shadow: 0 0 10px #ccc;
            box-shadow: 0 0 10px #ccc
        }

        .single-logo.wls-grayscale img.wls-logo {
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
            filter: grayscale(100%)
        }

        .single-logo.wls-grayscale img.wls-logo:hover {
            -webkit-filter: grayscale(0);
            -moz-filter: grayscale(0);
            -o-filter: grayscale(0);
            filter: none;
            filter: grayscale(0)
        }

        .rt-wpls .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent
        }

        .rt-wpls .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0
        }

        .rt-wpls .slick-list:focus {
            outline: none
        }

        .rt-wpls .slick-list.dragging {
            cursor: pointer;
            cursor: hand
        }

        .rt-wpls .slick-slider .slick-track, .rt-wpls .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .rt-wpls .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
            padding: 20px 0
        }

        .rt-wpls .slick-track:before, .rt-wpls .slick-track:after {
            display: table;
            content: ''
        }

        .rt-wpls .slick-track:after {
            clear: both
        }

        .rt-wpls .slick-loading .slick-track {
            visibility: hidden
        }

        .rt-wpls .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px
        }

        [dir='rtl'] .slick-slide {
            float: right
        }

        .rt-wpls .slick-slide img {
            display: block;
            margin: auto
        }

        .rt-wpls .slick-slide.slick-loading img {
            display: none
        }

        .rt-wpls .slick-slide.dragging img {
            pointer-events: none
        }

        .rt-wpls .slick-initialized .slick-slide {
            display: block
        }

        .rt-wpls .slick-loading .slick-slide {
            visibility: hidden
        }

        .rt-wpls .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent
        }

        .rt-wpls .slick-arrow.slick-hidden {
            display: none
        }

        .rt-wpls .slick-loading .slick-list {
            background: #fff url(https://radiustheme.com/demo/wordpress/redchili/wp-content/plugins/wp-logo-showcase/assets/css/../images/ajax-loader.gif) center center no-repeat
        }

        @font-face {
            font-family: 'slick';
            font-weight: 400;
            font-style: normal;
            src: url(https://radiustheme.com/demo/wordpress/redchili/wp-content/plugins/wp-logo-showcase/assets/css/./fonts/slick.eot);
            src: url(https://radiustheme.com/demo/wordpress/redchili/wp-content/plugins/wp-logo-showcase/assets/css/./fonts/slick.eot#1656994313) format('embedded-opentype'), url(https://radiustheme.com/demo/wordpress/redchili/wp-content/plugins/wp-logo-showcase/assets/css/./fonts/slick.woff) format('woff'), url(https://radiustheme.com/demo/wordpress/redchili/wp-content/plugins/wp-logo-showcase/assets/css/./fonts/slick.ttf) format('truetype'), url(https://radiustheme.com/demo/wordpress/redchili/wp-content/plugins/wp-logo-showcase/assets/css/./fonts/slick.svg#slick) format('svg')
        }

        .rt-wpls .slick-prev, .rt-wpls .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            display: block;
            width: 20px;
            height: 20px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            color: transparent;
            border: none;
            outline: none;
            background: transparent;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%
        }

        .rt-wpls .slick-prev:hover, .rt-wpls .slick-prev:focus, .rt-wpls .slick-next:hover, .rt-wpls .slick-next:focus {
            color: transparent;
            outline: none;
            background: transparent
        }

        .rt-wpls .slick-prev:hover:before, .rt-wpls .slick-prev:focus:before, .rt-wpls .slick-next:hover:before, .rt-wpls .slick-next:focus:before {
            opacity: 1
        }

        .rt-wpls .slick-prev.slick-disabled:before, .rt-wpls .slick-next.slick-disabled:before {
            opacity: .25
        }

        .rt-wpls .slick-prev:before, .rt-wpls .slick-next:before {
            font-family: 'slick';
            font-size: 20px;
            line-height: 22px;
            opacity: .75;
            color: #8e8d8d;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%
        }

        .rt-wpls .slick-prev {
            left: -25px
        }

        [dir='rtl'] .slick-prev {
            right: -25px;
            left: auto
        }

        .rt-wpls .slick-prev:before {
            content: '←'
        }

        [dir='rtl'] .slick-prev:before {
            content: '→'
        }

        .rt-wpls .slick-next {
            right: -25px
        }

        [dir='rtl'] .slick-next {
            right: auto;
            left: -25px
        }

        .rt-wpls .slick-next:before {
            content: '→'
        }

        [dir='rtl'] .slick-next:before {
            content: '←'
        }

        .rt-wpls .slick-dotted.slick-slider {
            margin-bottom: 30px
        }

        .rt-wpls .slick-dots {
            position: absolute;
            bottom: -25px;
            display: block;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center
        }

        .rt-wpls .slick-dots li {
            position: relative;
            display: inline-block;
            width: 15px;
            height: 15px;
            margin: 0 5px;
            padding: 0;
            cursor: pointer
        }

        .rt-wpls .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent
        }

        .rt-wpls .slick-dots li button:hover, .rt-wpls .slick-dots li button:focus {
            outline: none
        }

        .rt-wpls .slick-dots li button:hover:before, .rt-wpls .slick-dots li button:focus:before {
            opacity: 1
        }

        .rt-wpls .slick-dots li button:before {
            font-family: 'slick';
            font-size: 12px;
            line-height: 15px;
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            content: '•';
            text-align: center;
            opacity: .5;
            color: #000;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .rt-wpls .slick-dots li.slick-active button:before {
            opacity: 1;
            color: #000
        }

        body > .rt-tooltip {
            font-size: 100%;
            position: absolute;
            z-index: 9999;
            -o-box-shadow: 0 0 5px #aaa;
            -moz-box-shadow: 0 0 5px #aaa;
            -webkit-box-shadow: 0 0 5px #aaa;
            box-shadow: 0 0 5px #aaa;
            color: #fff;
            border-radius: 3px;
            background: #666;
            padding: 5px 10px;
            border-width: 2px;
            opacity: 0;
            -webkit-transition: opacity 1s ease-in-out;
            -moz-transition: opacity 1s ease-in-out;
            -ms-transition: opacity 1s ease-in-out;
            -o-transition: opacity 1s ease-in-out;
            transition: opacity 1s ease-in-out
        }

        body > .rt-tooltip, body > .rt-tooltip .rt-tooltip-bottom:after {
            background: #666;
            border-radius: 2px
        }

        body > .rt-tooltip .rt-tooltip-bottom {
            width: 70px;
            height: 18px;
            overflow: hidden;
            position: absolute;
            left: 50%;
            margin-left: -32px;
            bottom: -16px
        }

        body > .rt-tooltip .rt-tooltip-bottom:after {
            content: "";
            position: absolute;
            left: 20px;
            top: -20px;
            width: 25px;
            height: 25px;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            tranform: rotate(45deg)
        }

        @media (min-width: 768px) {
            .rt-container {
                width: 750px
            }
        }

        @media (min-width: 992px) {
            .rt-container {
                width: 970px
            }
        }

        @media (min-width: 1200px) {
            .rt-container {
                width: 1170px
            }
        }

        @media (max-width: 767px) {
            .hidden-xs {
                display: none !important
            }
        }

        @media (min-width: 768px) {
            .rt-col-sm-24 {
                width: 20%
            }

            .rt-col-sm-12 {
                width: 100%
            }

            .rt-col-sm-11 {
                width: 91.66666667%
            }

            .rt-col-sm-10 {
                width: 83.33333333%
            }

            .rt-col-sm-9 {
                width: 75%
            }

            .rt-col-sm-8 {
                width: 66.66666667%
            }

            .rt-col-sm-7 {
                width: 58.33333333%
            }

            .rt-col-sm-6 {
                width: 50%
            }

            .rt-col-sm-5 {
                width: 41.66666667%
            }

            .rt-col-sm-4 {
                width: 33.33333333%
            }

            .rt-col-sm-3 {
                width: 25%
            }

            .rt-col-sm-2 {
                width: 16.66666667%
            }

            .rt-col-sm-1 {
                width: 8.33333333%
            }
        }

        @media (min-width: 992px) {
            .rt-col-md-24 {
                width: 20%
            }

            .rt-col-md-12 {
                width: 100%
            }

            .rt-col-md-11 {
                width: 91.66666667%
            }

            .rt-col-md-10 {
                width: 83.33333333%
            }

            .rt-col-md-9 {
                width: 75%
            }

            .rt-col-md-8 {
                width: 66.66666667%
            }

            .rt-col-md-7 {
                width: 58.33333333%
            }

            .rt-col-md-6 {
                width: 50%
            }

            .rt-col-md-5 {
                width: 41.66666667%
            }

            .rt-col-md-4 {
                width: 33.33333333%
            }

            .rt-col-md-3 {
                width: 25%
            }

            .rt-col-md-2 {
                width: 16.66666667%
            }

            .rt-col-md-1 {
                width: 8.33333333%
            }
        }

        @media (min-width: 1200px) {
            .rt-col-lg-24 {
                width: 20%
            }

            .rt-col-lg-12 {
                width: 100%
            }

            .rt-col-lg-11 {
                width: 91.66666667%
            }

            .rt-col-lg-10 {
                width: 83.33333333%
            }

            .rt-col-lg-9 {
                width: 75%
            }

            .rt-col-lg-8 {
                width: 66.66666667%
            }

            .rt-col-lg-7 {
                width: 58.33333333%
            }

            .rt-col-lg-6 {
                width: 50%
            }

            .rt-col-lg-5 {
                width: 41.66666667%
            }

            .rt-col-lg-4 {
                width: 33.33333333%
            }

            .rt-col-lg-3 {
                width: 25%
            }

            .rt-col-lg-2 {
                width: 16.66666667%
            }

            .rt-col-lg-1 {
                width: 8.33333333%
            }

            .carousel-layout.owl-carousel.owl-theme [class*='rt-col-lg-'] {
                width: 100%
            }
        }</style>
    <style class="optimize_css_2" type="text/css"
           media="all">html.yith-quick-view-is-open, html.yith-quick-view-is-open body {
            overflow: hidden
        }

        #yith-quick-view-modal {
            position: fixed;
            visibility: hidden;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1400;
            opacity: 0;
            text-align: center;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s
        }

        #yith-quick-view-modal:before {
            content: '';
            display: inline-block;
            vertical-align: middle;
            height: 100%;
            width: 0
        }

        #yith-quick-view-modal .yith-quick-view-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, .8)
        }

        #yith-quick-view-modal .yith-wcqv-wrapper {
            display: inline-block;
            vertical-align: middle;
            visibility: hidden;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
            text-align: left;
            height: 600px;
            width: 1000px
        }

        #yith-quick-view-modal .yith-wcqv-main {
            -webkit-transform: translateY(20%);
            -moz-transform: translateY(20%);
            -ms-transform: translateY(20%);
            transform: translateY(20%);
            opacity: 0;
            height: 100%;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            -webkit-box-shadow: 0 0 0 10px rgba(255, 255, 255, .2);
            box-shadow: 0 0 0 10px rgba(255, 255, 255, .2)
        }

        #yith-quick-view-modal.open, #yith-quick-view-modal.open .yith-wcqv-wrapper {
            visibility: visible;
            opacity: 1
        }

        #yith-quick-view-modal #yith-quick-view-content {
            height: 100%
        }

        #yith-quick-view-modal .yith-wcqv-main:after, #yith-quick-view-modal .yith-wcqv-main:before {
            content: '';
            display: table;
            clear: both
        }

        #yith-quick-view-modal.open .yith-wcqv-main {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
            height: 100%;
            overflow-y: scroll;
            position: relative
        }

        #yith-quick-view-close {
            border: 1px solid;
            position: absolute;
            top: 5px;
            right: 5px;
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 18px;
            z-index: 2;
            opacity: .5
        }

        #yith-quick-view-close:hover {
            opacity: 1;
            transition: all 0.2s ease;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -ms-transition: all 0.2s ease
        }

        #yith-quick-view-content div.images {
            width: 40%;
            float: left;
            opacity: 1 !important;
            margin: 0
        }

        #yith-quick-view-content div.summary {
            margin: 0;
            padding: 15px;
            width: 60%;
            float: left;
            font-size: inherit
        }

        #yith-quick-view-content div.woocommerce-product-rating:after, #yith-quick-view-content div.woocommerce-product-rating:before {
            content: '';
            display: table;
            clear: both
        }

        #yith-quick-view-content div.woocommerce-product-rating a.woocommerce-review-link {
            display: none
        }

        #yith-quick-view-content .onsale {
            top: 5px;
            right: auto;
            left: 5px
        }

        #yith-quick-view-content figure.woocommerce-product-gallery__wrapper > div:not(:first-child) {
            display: none
        }

        li.product .yith-wcqv-button .blockUI.blockOverlay:before {
            background: none
        }

        @media (max-width: 480px) {
            #yith-quick-view-content div.images, #yith-quick-view-content div.summary {
                width: 100%;
                float: none
            }

            #yith-quick-view-content div.summary {
                margin: 0;
                padding: 15px;
                width: 100%;
                float: left
            }
        }</style>
    <style class="optimize_css_4" type="text/css" media="all">#yith-quick-view-modal .yith-wcqv-main {
            background: #fff
        }

        #yith-quick-view-close {
            color: #cdcdcd
        }

        #yith-quick-view-close:hover {
            color: red
        }</style>
    <style id="yith-quick-view-inline-css" type="text/css">

        #yith-quick-view-modal .yith-wcqv-main {
            background: #ffffff;
        }

        #yith-quick-view-close {
            color: #cdcdcd;
        }

        #yith-quick-view-close:hover {
            color: #ff0000;
        }
    </style>
    <style class="optimize_css_2" type="text/css" media="all">.xdsoft_datetimepicker {
            box-shadow: 0 5px 15px -5px rgba(0, 0, 0, .506);
            background: #fff;
            border-bottom: 1px solid #bbb;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-top: 1px solid #ccc;
            color: #333;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 2px 8px 8px 0;
            position: absolute;
            z-index: 9999;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: none
        }

        .xdsoft_datetimepicker.xdsoft_rtl {
            padding: 8px 0 8px 8px
        }

        .xdsoft_datetimepicker iframe {
            position: absolute;
            left: 0;
            top: 0;
            width: 75px;
            height: 210px;
            background: 0 0;
            border: none
        }

        .xdsoft_datetimepicker button {
            border: none !important
        }

        .xdsoft_noselect {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none
        }

        .xdsoft_noselect::selection {
            background: 0 0
        }

        .xdsoft_noselect::-moz-selection {
            background: 0 0
        }

        .xdsoft_datetimepicker.xdsoft_inline {
            display: inline-block;
            position: static;
            box-shadow: none
        }

        .xdsoft_datetimepicker * {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
            margin: 0
        }

        .xdsoft_datetimepicker .xdsoft_datepicker, .xdsoft_datetimepicker .xdsoft_timepicker {
            display: none
        }

        .xdsoft_datetimepicker .xdsoft_datepicker.active, .xdsoft_datetimepicker .xdsoft_timepicker.active {
            display: block
        }

        .xdsoft_datetimepicker .xdsoft_datepicker {
            width: 224px;
            float: left;
            margin-left: 8px
        }

        .xdsoft_datetimepicker.xdsoft_rtl .xdsoft_datepicker {
            float: right;
            margin-right: 8px;
            margin-left: 0
        }

        .xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker {
            width: 256px
        }

        .xdsoft_datetimepicker .xdsoft_timepicker {
            width: 58px;
            float: left;
            text-align: center;
            margin-left: 8px;
            margin-top: 0
        }

        .xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker {
            float: right;
            margin-right: 8px;
            margin-left: 0
        }

        .xdsoft_datetimepicker .xdsoft_datepicker.active + .xdsoft_timepicker {
            margin-top: 8px;
            margin-bottom: 3px
        }

        .xdsoft_datetimepicker .xdsoft_monthpicker {
            position: relative;
            text-align: center
        }

        .xdsoft_datetimepicker .xdsoft_label i, .xdsoft_datetimepicker .xdsoft_next, .xdsoft_datetimepicker .xdsoft_prev, .xdsoft_datetimepicker .xdsoft_today_button {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC)
        }

        .xdsoft_datetimepicker .xdsoft_label i {
            opacity: .5;
            background-position: -92px -19px;
            display: inline-block;
            width: 9px;
            height: 20px;
            vertical-align: middle
        }

        .xdsoft_datetimepicker .xdsoft_prev {
            float: left;
            background-position: -20px 0
        }

        .xdsoft_datetimepicker .xdsoft_today_button {
            float: left;
            background-position: -70px 0;
            margin-left: 5px
        }

        .xdsoft_datetimepicker .xdsoft_next {
            float: right;
            background-position: 0 0
        }

        .xdsoft_datetimepicker .xdsoft_next, .xdsoft_datetimepicker .xdsoft_prev, .xdsoft_datetimepicker .xdsoft_today_button {
            background-color: transparent;
            background-repeat: no-repeat;
            border: 0;
            cursor: pointer;
            display: block;
            height: 30px;
            opacity: .5;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            outline: 0;
            overflow: hidden;
            padding: 0;
            position: relative;
            text-indent: 100%;
            white-space: nowrap;
            width: 20px;
            min-width: 0
        }

        .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
            float: none;
            background-position: -40px -15px;
            height: 15px;
            width: 30px;
            display: block;
            margin-left: 14px;
            margin-top: 7px
        }

        .xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_next, .xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_prev {
            float: none;
            margin-left: 0;
            margin-right: 14px
        }

        .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
            background-position: -40px 0;
            margin-bottom: 7px;
            margin-top: 0
        }

        .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box {
            height: 151px;
            overflow: hidden;
            border-bottom: 1px solid #ddd
        }

        .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div {
            background: #f5f5f5;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 12px;
            text-align: center;
            border-collapse: collapse;
            cursor: pointer;
            border-bottom-width: 0;
            height: 25px;
            line-height: 25px
        }

        .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:first-child {
            border-top-width: 0
        }

        .xdsoft_datetimepicker .xdsoft_next:hover, .xdsoft_datetimepicker .xdsoft_prev:hover, .xdsoft_datetimepicker .xdsoft_today_button:hover {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"
        }

        .xdsoft_datetimepicker .xdsoft_label {
            display: inline;
            position: relative;
            z-index: 9999;
            margin: 0;
            padding: 5px 3px;
            font-size: 14px;
            line-height: 20px;
            font-weight: 700;
            background-color: #fff;
            float: left;
            width: 182px;
            text-align: center;
            cursor: pointer
        }

        .xdsoft_datetimepicker .xdsoft_label:hover > span {
            text-decoration: underline
        }

        .xdsoft_datetimepicker .xdsoft_label:hover i {
            opacity: 1
        }

        .xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
            border: 1px solid #ccc;
            position: absolute;
            right: 0;
            top: 30px;
            z-index: 101;
            display: none;
            background: #fff;
            max-height: 160px;
            overflow-y: hidden
        }

        .xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_monthselect {
            right: -7px
        }

        .xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_yearselect {
            right: 2px
        }

        .xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
            color: #fff;
            background: #ff8000
        }

        .xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
            padding: 2px 10px 2px 5px;
            text-decoration: none !important
        }

        .xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
            background: #3af;
            box-shadow: #178fe5 0 1px 3px 0 inset;
            color: #fff;
            font-weight: 700
        }

        .xdsoft_datetimepicker .xdsoft_month {
            width: 100px;
            text-align: right
        }

        .xdsoft_datetimepicker .xdsoft_calendar {
            clear: both
        }

        .xdsoft_datetimepicker .xdsoft_year {
            width: 48px;
            margin-left: 5px
        }

        .xdsoft_datetimepicker .xdsoft_calendar table {
            border-collapse: collapse;
            width: 100%
        }

        .xdsoft_datetimepicker .xdsoft_calendar td > div {
            padding-right: 5px
        }

        .xdsoft_datetimepicker .xdsoft_calendar td, .xdsoft_datetimepicker .xdsoft_calendar th {
            width: 14.2857142%;
            background: #f5f5f5;
            border: 1px solid #ddd;
            color: #666;
            font-size: 12px;
            text-align: right;
            vertical-align: middle;
            padding: 0;
            border-collapse: collapse;
            cursor: pointer;
            height: 25px
        }

        .xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td, .xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th {
            width: 12.5%
        }

        .xdsoft_datetimepicker .xdsoft_calendar th {
            background: #f1f1f1
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
            color: #3af
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default {
            background: #ffe9d2;
            box-shadow: #ffb871 0 1px 4px 0 inset;
            color: #000
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint {
            background: #c1ffc9;
            box-shadow: #00dd1c 0 1px 4px 0 inset;
            color: #000
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current, .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
            background: #3af;
            box-shadow: #178fe5 0 1px 3px 0 inset;
            color: #fff;
            font-weight: 700
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled, .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month, .xdsoft_datetimepicker .xdsoft_time_box > div > div.xdsoft_disabled {
            opacity: .5;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
            cursor: default
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled {
            opacity: .2;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)"
        }

        .xdsoft_datetimepicker .xdsoft_calendar td:hover, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
            color: #fff !important;
            background: #ff8000 !important;
            box-shadow: none !important
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current.xdsoft_disabled:hover {
            background: #3af !important;
            box-shadow: #178fe5 0 1px 3px 0 inset !important;
            color: #fff !important
        }

        .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_disabled:hover {
            color: inherit !important;
            background: inherit !important;
            box-shadow: inherit !important
        }

        .xdsoft_datetimepicker .xdsoft_calendar th {
            font-weight: 700;
            text-align: center;
            color: #999;
            cursor: default
        }

        .xdsoft_datetimepicker .xdsoft_copyright {
            color: #ccc !important;
            font-size: 10px;
            clear: both;
            float: none;
            margin-left: 8px
        }

        .xdsoft_datetimepicker .xdsoft_copyright a {
            color: #eee !important
        }

        .xdsoft_datetimepicker .xdsoft_copyright a:hover {
            color: #aaa !important
        }

        .xdsoft_time_box {
            position: relative;
            border: 1px solid #ccc
        }

        .xdsoft_scrollbar > .xdsoft_scroller {
            background: #ccc !important;
            height: 20px;
            border-radius: 3px
        }

        .xdsoft_scrollbar {
            position: absolute;
            width: 7px;
            right: 0;
            top: 0;
            bottom: 0;
            cursor: pointer
        }

        .xdsoft_datetimepicker.xdsoft_rtl .xdsoft_scrollbar {
            left: 0;
            right: auto
        }

        .xdsoft_scroller_box {
            position: relative
        }

        .xdsoft_datetimepicker.xdsoft_dark {
            box-shadow: 0 5px 15px -5px rgba(255, 255, 255, .506);
            background: #000;
            border-bottom: 1px solid #444;
            border-left: 1px solid #333;
            border-right: 1px solid #333;
            border-top: 1px solid #333;
            color: #ccc
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box {
            border-bottom: 1px solid #222
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div {
            background: #0a0a0a;
            border-top: 1px solid #222;
            color: #999
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_label {
            background-color: #000
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select {
            border: 1px solid #333;
            background: #000
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
            color: #000;
            background: #007fff
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
            background: #c50;
            box-shadow: #b03e00 0 1px 3px 0 inset;
            color: #000
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i, .xdsoft_datetimepicker.xdsoft_dark .xdsoft_next, .xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev, .xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==)
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td, .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
            background: #0a0a0a;
            border: 1px solid #222;
            color: #999
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
            background: #0e0e0e
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today {
            color: #c50
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default {
            background: #ffe9d2;
            box-shadow: #ffb871 0 1px 4px 0 inset;
            color: #000
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint {
            background: #c1ffc9;
            box-shadow: #00dd1c 0 1px 4px 0 inset;
            color: #000
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current, .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default, .xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
            background: #c50;
            box-shadow: #b03e00 0 1px 3px 0 inset;
            color: #000
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover, .xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
            color: #000 !important;
            background: #007fff !important
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
            color: #666
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright {
            color: #333 !important
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a {
            color: #111 !important
        }

        .xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover {
            color: #555 !important
        }

        .xdsoft_dark .xdsoft_time_box {
            border: 1px solid #333
        }

        .xdsoft_dark .xdsoft_scrollbar > .xdsoft_scroller {
            background: #333 !important
        }

        .xdsoft_datetimepicker .xdsoft_save_selected {
            display: block;
            border: 1px solid #ddd !important;
            margin-top: 5px;
            width: 100%;
            color: #454551;
            font-size: 13px
        }

        .xdsoft_datetimepicker .blue-gradient-button {
            font-family: museo-sans, "Book Antiqua", sans-serif;
            font-size: 12px;
            font-weight: 300;
            color: #82878c;
            height: 28px;
            position: relative;
            padding: 4px 17px 4px 33px;
            border: 1px solid #d7d8da;
            background: -moz-linear-gradient(top, #fff 0, #f4f8fa 73%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(73%, #f4f8fa));
            background: -webkit-linear-gradient(top, #fff 0, #f4f8fa 73%);
            background: -o-linear-gradient(top, #fff 0, #f4f8fa 73%);
            background: -ms-linear-gradient(top, #fff 0, #f4f8fa 73%);
            background: linear-gradient(to bottom, #fff 0, #f4f8fa 73%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#f4f8fa', GradientType=0)
        }

        .xdsoft_datetimepicker .blue-gradient-button:focus, .xdsoft_datetimepicker .blue-gradient-button:focus span, .xdsoft_datetimepicker .blue-gradient-button:hover, .xdsoft_datetimepicker .blue-gradient-button:hover span {
            color: #454551;
            background: -moz-linear-gradient(top, #f4f8fa 0, #FFF 73%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #f4f8fa), color-stop(73%, #FFF));
            background: -webkit-linear-gradient(top, #f4f8fa 0, #FFF 73%);
            background: -o-linear-gradient(top, #f4f8fa 0, #FFF 73%);
            background: -ms-linear-gradient(top, #f4f8fa 0, #FFF 73%);
            background: linear-gradient(to bottom, #f4f8fa 0, #FFF 73%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f8fa', endColorstr='#FFF', GradientType=0)
        }</style>
    <style class="optimize_css_2" type="text/css" media="all">.ui-timepicker-wrapper {
            overflow-y: auto;
            max-height: 150px;
            width: 6.5em;
            background: #fff;
            border: 1px solid #ddd;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            outline: 0;
            z-index: 10052;
            margin: 0
        }

        .ui-timepicker-wrapper.ui-timepicker-with-duration {
            width: 13em
        }

        .ui-timepicker-wrapper.ui-timepicker-with-duration.ui-timepicker-step-30, .ui-timepicker-wrapper.ui-timepicker-with-duration.ui-timepicker-step-60 {
            width: 11em
        }

        .ui-timepicker-list {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .ui-timepicker-duration {
            margin-left: 5px;
            color: #888
        }

        .ui-timepicker-list:hover .ui-timepicker-duration {
            color: #888
        }

        .ui-timepicker-list li {
            padding: 3px 0 3px 5px;
            cursor: pointer;
            white-space: nowrap;
            color: #000;
            list-style: none;
            margin: 0
        }

        .ui-timepicker-list:hover .ui-timepicker-selected {
            background: #fff;
            color: #000
        }

        li.ui-timepicker-selected, .ui-timepicker-list li:hover, .ui-timepicker-list .ui-timepicker-selected:hover {
            background: #1980EC;
            color: #fff
        }

        li.ui-timepicker-selected .ui-timepicker-duration, .ui-timepicker-list li:hover .ui-timepicker-duration {
            color: #ccc
        }

        .ui-timepicker-list li.ui-timepicker-disabled, .ui-timepicker-list li.ui-timepicker-disabled:hover, .ui-timepicker-list li.ui-timepicker-selected.ui-timepicker-disabled {
            color: #888;
            cursor: default
        }

        .ui-timepicker-list li.ui-timepicker-disabled:hover, .ui-timepicker-list li.ui-timepicker-selected.ui-timepicker-disabled {
            background: #f2f2f2
        }</style>
    <style class="optimize_css_2" type="text/css" media="all">html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article, aside, details, figcaption, figure, footer, header, main, menu, nav, section, summary {
            display: block
        }

        audio, canvas, progress, video {
            display: inline-block;
            vertical-align: baseline
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        [hidden], template {
            display: none
        }

        a {
            background-color: transparent
        }

        a:active, a:hover {
            outline: 0
        }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b, strong {
            font-weight: 700
        }

        dfn {
            font-style: italic
        }

        mark {
            background: #ff0;
            color: #000
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        figure {
            margin: 1em 40px
        }

        hr {
            box-sizing: content-box;
            height: 0
        }

        pre {
            overflow: auto
        }

        code, kbd, pre, samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        button, input, optgroup, select, textarea {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button, select {
            text-transform: none
        }

        button, html input[type="button"], input[type="reset"], input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer
        }

        button[disabled], html input[disabled] {
            cursor: default
        }

        button::-moz-focus-inner, input::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        input {
            line-height: normal
        }

        input[type="checkbox"], input[type="radio"] {
            box-sizing: border-box;
            padding: 0
        }

        input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
            height: auto
        }

        input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        input::-webkit-input-placeholder {
            opacity: 1
        }

        input::-moz-placeholder {
            opacity: 1
        }

        input:-moz-placeholder {
            opacity: 1
        }

        input:-ms-input-placeholder {
            opacity: 1
        }

        input::placeholder {
            opacity: 1
        }

        fieldset {
            border: 1px solid silver;
            margin: 0 2px;
            padding: .35em .625em .75em
        }

        legend {
            border: 0;
            padding: 0
        }

        textarea {
            overflow: auto
        }

        optgroup {
            font-weight: 700
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        td, th {
            padding: 0
        }

        body, button, input, select, textarea {
            color: #404040;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #666;
            line-height: 1.5
        }

        h1, h2, h3, h4, h5, h6 {
            clear: both
        }

        p {
            margin-bottom: 1.5em
        }

        dfn, cite, em, i {
            font-style: italic
        }

        blockquote {
            margin: 0 1.5em 20px;
            border-color: #fb5b21
        }

        address {
            margin: 0 0 1.5em
        }

        pre {
            background: #eee;
            font-family: "Courier 10 Pitch", Courier, monospace;
            line-height: 1.6;
            margin-bottom: 1.6em;
            max-width: 100%;
            overflow: auto;
            padding: 1.6em
        }

        code, kbd, tt, var {
            font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
            font-size: 15px;
            font-size: .9375rem
        }

        abbr, acronym {
            border-bottom: 1px dotted #666;
            cursor: help
        }

        mark, ins {
            background: #fff9c0;
            text-decoration: none
        }

        big {
            font-size: 125%
        }

        html {
            box-sizing: border-box
        }

        *, *:before, *:after {
            box-sizing: inherit
        }

        body {
            background: #fff
        }

        blockquote:before, blockquote:after, q:before, q:after {
            content: ""
        }

        blockquote, q {
            quotes: "" ""
        }

        hr {
            background-color: #ccc;
            border: 0;
            height: 1px;
            margin-bottom: 1.5em
        }

        ul, ol {
            margin: 0 0 1em 1em;
            padding-left: 20px
        }

        ul {
            list-style: disc
        }

        ol {
            list-style: decimal
        }

        li > ul, li > ol {
            margin-bottom: 0;
            margin-left: 1.5em
        }

        dt {
            font-weight: 700;
            margin-bottom: 10px
        }

        dd {
            margin: 0 1.5em 1.5em
        }

        img {
            height: auto;
            max-width: 100%
        }

        figure {
            margin: 1em 0
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 15px 0;
            width: 100%
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px
        }

        button, input[type="button"], input[type="reset"], input[type="submit"] {
            background-color: #fb5b21;
            border: medium none;
            color: #fff;
            padding: 2px 15px
        }

        button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, input[type="button"]:active, input[type="reset"]:active, input[type="submit"]:active {
            background-color: #000
        }

        input[type="text"], input[type="email"], input[type="url"], input[type="password"], input[type="search"], input[type="number"], input[type="tel"], input[type="range"], input[type="date"], input[type="month"], input[type="week"], input[type="time"], input[type="datetime"], input[type="datetime-local"], input[type="color"], textarea {
            color: #666;
            border: 1px solid #ccc
        }

        select {
            border: 1px solid #ccc
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="number"]:focus, input[type="tel"]:focus, input[type="range"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="time"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="color"]:focus, textarea:focus {
            color: #111
        }

        textarea {
            width: 100%
        }

        a:link, a:visited {
            color: #e7272d;
            transition: all 0.3s ease 0s;
            text-decoration: none
        }

        a:hover, a:focus, a:active {
            color: #b0360a;
            text-decoration: none
        }

        a:focus {
            outline: thin dotted
        }

        a:hover, a:active {
            outline: 0
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden
        }

        .screen-reader-text:focus {
            background-color: #f1f1f1;
            border-radius: 3px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, .6);
            clip: auto !important;
            color: #21759b;
            display: block;
            font-size: 14px;
            font-size: .875rem;
            font-weight: 700;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        #content[tabindex="-1"]:focus {
            outline: 0
        }

        .alignleft {
            display: inline;
            float: left;
            margin-right: 1.5em
        }

        .alignright {
            display: inline;
            float: right;
            margin-left: 1.5em
        }

        .aligncenter {
            clear: both;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .clear:before, .clear:after, .entry-content:before, .entry-content:after, .comment-content:before, .comment-content:after, .site-header:before, .site-header:after, .site-content:before, .site-content:after, .site-footer:before, .site-footer:after {
            content: "";
            display: table;
            table-layout: fixed
        }

        .clear:after, .entry-content:after, .comment-content:after, .site-header:after, .site-content:after, .site-footer:after {
            clear: both
        }

        .widget {
            margin: 0 0 1.5em
        }

        .widget select {
            max-width: 100%
        }

        .sticky {
            display: block
        }

        .byline, .updated:not(.published) {
            display: none
        }

        .single .byline, .group-blog .byline {
            display: inline
        }

        .page-links {
            clear: both;
            margin: 0 0 1.5em
        }

        .comment-content a {
            word-wrap: break-word
        }

        .bypostauthor {
            display: block
        }

        .infinite-scroll .posts-navigation, .infinite-scroll.neverending .site-footer {
            display: none
        }

        .infinity-end.neverending .site-footer {
            display: block
        }

        .page-content .wp-smiley, .entry-content .wp-smiley, .comment-content .wp-smiley {
            border: none;
            margin-bottom: 0;
            margin-top: 0;
            padding: 0
        }

        embed, iframe, object {
            max-width: 100%
        }

        .wp-caption {
            margin-bottom: 1.5em;
            max-width: 100%
        }

        .wp-caption img[class*="wp-image-"] {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .wp-caption .wp-caption-text {
            margin: .8075em 0
        }

        .wp-caption-text {
            text-align: center
        }

        .gallery {
            margin-bottom: 1.5em
        }

        .gallery-item {
            display: inline-block;
            text-align: center;
            vertical-align: top;
            width: 100%
        }

        .gallery-columns-2 .gallery-item {
            max-width: 50%
        }

        .gallery-columns-3 .gallery-item {
            max-width: 33.33%
        }

        .gallery-columns-4 .gallery-item {
            max-width: 25%
        }

        .gallery-columns-5 .gallery-item {
            max-width: 20%
        }

        .gallery-columns-6 .gallery-item {
            max-width: 16.66%
        }

        .gallery-columns-7 .gallery-item {
            max-width: 14.28%
        }

        .gallery-columns-8 .gallery-item {
            max-width: 12.5%
        }

        .gallery-columns-9 .gallery-item {
            max-width: 11.11%
        }

        .gallery-caption {
            display: block
        }

        @media (min-width: 1200px) {
            .auto-clear > .col-lg-1:nth-child(12n+1) {
                clear: left
            }

            .auto-clear > .col-lg-2:nth-child(6n+1) {
                clear: left
            }

            .auto-clear > .col-lg-3:nth-child(4n+1) {
                clear: left
            }

            .auto-clear > .col-lg-4:nth-child(3n+1) {
                clear: left
            }

            .auto-clear > .col-lg-6:nth-child(odd) {
                clear: left
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .auto-clear > .col-md-1:nth-child(12n+1) {
                clear: left
            }

            .auto-clear > .col-md-2:nth-child(6n+1) {
                clear: left
            }

            .auto-clear > .col-md-3:nth-child(4n+1) {
                clear: left
            }

            .auto-clear > .col-md-4:nth-child(3n+1) {
                clear: left
            }

            .auto-clear > .col-md-6:nth-child(odd) {
                clear: left
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .auto-clear > .col-sm-1:nth-child(12n+1) {
                clear: left
            }

            .auto-clear > .col-sm-2:nth-child(6n+1) {
                clear: left
            }

            .auto-clear > .col-sm-3:nth-child(4n+1) {
                clear: left
            }

            .auto-clear > .col-sm-4:nth-child(3n+1) {
                clear: left
            }

            .auto-clear > .col-sm-6:nth-child(odd) {
                clear: left
            }
        }

        @media (max-width: 767px) {
            .auto-clear > .col-xs-1:nth-child(12n+1) {
                clear: left
            }

            .auto-clear > .col-xs-2:nth-child(6n+1) {
                clear: left
            }

            .auto-clear > .col-xs-3:nth-child(4n+1) {
                clear: left
            }

            .auto-clear > .col-xs-4:nth-child(3n+1) {
                clear: left
            }

            .auto-clear > .col-xs-6:nth-child(odd) {
                clear: left
            }
        }</style>
    <style class="optimize_css_2" type="text/css" media="all">.addtoany_content {
            clear: both;
            margin: 16px auto
        }

        .addtoany_header {
            margin: 0 0 16px
        }

        .addtoany_list {
            display: inline;
            line-height: 16px
        }

        .addtoany_list a, .widget .addtoany_list a {
            border: 0;
            box-shadow: none;
            display: inline-block;
            font-size: 16px;
            padding: 0 4px;
            vertical-align: middle
        }

        .addtoany_list a img {
            border: 0;
            display: inline-block;
            opacity: 1;
            overflow: hidden;
            vertical-align: baseline
        }

        .addtoany_list a span {
            display: inline-block;
            float: none
        }

        .addtoany_list.a2a_kit_size_32 a {
            font-size: 32px
        }

        .addtoany_list.a2a_kit_size_32 a:not(.addtoany_special_service) > span {
            height: 32px;
            line-height: 32px;
            width: 32px
        }

        .addtoany_list a:not(.addtoany_special_service) > span {
            border-radius: 4px;
            display: inline-block;
            opacity: 1
        }

        .addtoany_list a .a2a_count {
            position: relative;
            vertical-align: top
        }

        .site .a2a_kit.addtoany_list a:focus, .addtoany_list a:hover, .widget .addtoany_list a:hover {
            background: none;
            border: 0;
            box-shadow: none
        }

        .addtoany_list a:hover img, .addtoany_list a:hover span {
            opacity: .7
        }

        .addtoany_list a.addtoany_special_service:hover img, .addtoany_list a.addtoany_special_service:hover span {
            opacity: 1
        }

        .addtoany_special_service {
            display: inline-block;
            vertical-align: middle
        }

        .addtoany_special_service a, .addtoany_special_service div, .addtoany_special_service div.fb_iframe_widget, .addtoany_special_service iframe, .addtoany_special_service span {
            margin: 0;
            vertical-align: baseline !important
        }

        .addtoany_special_service iframe {
            display: inline;
            max-width: none
        }

        a.addtoany_share.addtoany_no_icon span.a2a_img_text {
            display: none
        }

        a.addtoany_share img {
            border: 0;
            width: auto;
            height: auto
        }</style>
    <link rel="stylesheet" id="wpo_min-header-0-css"
          href="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/wpo-minify-header-02e8615b.min.css')}}" type="text/css" media="all">
    <script type="text/javascript" src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/wpo-minify-header-3477056c.min.js')}}"
            id="wpo_min-header-0-js"></script>
    <script type="text/javascript" id="layerslider-utils-js-extra">
        /* <![CDATA[ */
        var LS_Meta = {"v": "6.11.8", "fixGSAP": "1"};
        /* ]]> */
    </script>
    <script data-wp-optimize-escape="/jquery.js" type="text/javascript"
            src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/layerslider.utils.js')}}" id="layerslider-utils-js"></script>
    <script data-wp-optimize-escape="/jquery.js" type="text/javascript"
            src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/layerslider.kreaturamedia.jquery.js')}}"
            id="layerslider-js"></script>
    <script data-wp-optimize-escape="/jquery.js" type="text/javascript"
            src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/layerslider.transitions.js')}}"
            id="layerslider-transitions-js"></script>
    <script type="text/javascript" id="addtoany-core-js-before">
        window.a2a_config = window.a2a_config || {};
        a2a_config.callbacks = [];
        a2a_config.overlays = [];
        a2a_config.templates = {};
    </script>
    <script type="text/javascript" async="" src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/page.js')}}"
            id="addtoany-core-js"></script>
    <script type="text/javascript" id="wpo_min-header-5-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/demo\/wordpress\/redchili\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        var wc_add_to_cart_params = {
            "ajax_url": "\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/demo\/wordpress\/redchili\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/wpo-minify-header-75de386f.min.js')}}"
            id="wpo_min-header-5-js"></script>
    <meta name="generator"
          content="Powered by LayerSlider 6.11.8 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress.">
    <!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
    <link rel="https://api.w.org/" href="wp-json/">
    <link rel="alternate" type="application/json"
          href="wp-json/wp/v2/pages/3107">
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
          href="xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.0">
    <meta name="generator" content="WooCommerce 6.3.1">
    <link rel="canonical" href="food-menu-isotope-3/">
    <link rel="shortlink" href="?p=3107">
    <link rel="alternate" type="application/json+oembed"
          href="wp-json/oembed/1.0/embed?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fredchili%2Ffood-menu-isotope-3%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="wp-json/oembed/1.0/embed?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fredchili%2Ffood-menu-isotope-3%2F&amp;format=xml">
    <meta name="generator" content="Redux 4.3.14">
{{--    <link rel="preload"--}}
{{--          href="wp-content/plugins/LayerSlider/assets/static/font-awesome/fonts/fontawesome-webfont.woff2"--}}
{{--          as="font" type="font/woff2" crossorigin="">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
    <!-- Favicon -->
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon"/>

    <style type="text/css" id="wp-custom-css">
        /*
You can add your own CSS here.

Click the help icon above to learn more.
*/
        #fmp-container-645108771 .fmp-isotope-buttons button:hover {
            color: #fff;
        }

        .fmp-isotope-buttons button:hover {
            color: #fff !important;
        }

        .ls-wrapper .slider-button-1 {
            font-size: 18px !important;
            color: #fff !important;
            border: 2px solid #fff !important;
            padding: 10px 38px !important;
        }

        .ls-wrapper .slider-button-1:hover {
            color: #fff !important;
            background: #e7272d;
            border: 2px solid transparent !important;
        }

        @media (max-width: 767px) {
            .ls-wrapper .slider-button-1 {
                font-size: 15px !important;
                padding: 7px 22px !important;
            }
        }
    </style>
    <noscript>
        <style> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>

    @toastr_css

</head>
<body class="page-template-default page page-id-3107 wp-embed-responsive theme-redchili woocommerce-js wls_unknown wls_windows header-style-1 has-topbar topbar-style-1 no-sidebar product-grid-view wpb-js-composer js-comp-ver-6.6.0 vc_responsive">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-dark-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0 0.49803921568627"></fefuncr>
                <fefuncg type="table" tableValues="0 0.49803921568627"></fefuncg>
                <fefuncb type="table" tableValues="0 0.49803921568627"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-grayscale">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0 1"></fefuncr>
                <fefuncg type="table" tableValues="0 1"></fefuncg>
                <fefuncb type="table" tableValues="0 1"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0.54901960784314 0.98823529411765"></fefuncr>
                <fefuncg type="table" tableValues="0 1"></fefuncg>
                <fefuncb type="table" tableValues="0.71764705882353 0.25490196078431"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-red">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0 1"></fefuncr>
                <fefuncg type="table" tableValues="0 0.27843137254902"></fefuncg>
                <fefuncb type="table" tableValues="0.5921568627451 0.27843137254902"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-midnight">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0 0"></fefuncr>
                <fefuncg type="table" tableValues="0 0.64705882352941"></fefuncg>
                <fefuncb type="table" tableValues="0 1"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-magenta-yellow">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0.78039215686275 1"></fefuncr>
                <fefuncg type="table" tableValues="0 0.94901960784314"></fefuncg>
                <fefuncb type="table" tableValues="0.35294117647059 0.47058823529412"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-purple-green">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0.65098039215686 0.40392156862745"></fefuncr>
                <fefuncg type="table" tableValues="0 1"></fefuncg>
                <fefuncb type="table" tableValues="0.44705882352941 0.4"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
     style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
        <filter id="wp-duotone-blue-orange">
            <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
                           values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
            <fecomponenttransfer color-interpolation-filters="sRGB">
                <fefuncr type="table" tableValues="0.098039215686275 1"></fefuncr>
                <fefuncg type="table" tableValues="0 0.66274509803922"></fefuncg>
                <fefuncb type="table" tableValues="0.84705882352941 0.41960784313725"></fefuncb>
                <fefunca type="table" tableValues="1 1"></fefunca>
            </fecomponenttransfer>
            <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
        </filter>
    </defs>
</svg>
<div class="wrapper">
    <header id="masthead" class="site-header">
        <div id="header-1" class="header-area header-fixed " style="top: 0px;">
            <div id="tophead" class="header-top-bar align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tophead-contact">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i><a
                                                href="tel:{{setting('phone')}}">{{setting('phone')}}</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i><a
                                                href="mailto:info@redchili.com">{{setting('email')}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tophead-right tophead-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>{{setting('address')}}</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container masthead-container" id="sticker">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div class="site-branding">
                            <a class="dark-logo" href=""><img
                                        src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/logo-dark.png')}}" alt="Red Chili">
                                        </a>
                            <a class="light-logo" href=""><img
                                        src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/logo-light.png')}}"
                                        alt="Red Chili"></a>
                        </div>
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <div id="site-navigation" class="main-navigation">
                            <nav class="menu-main-menu-container">

                                <ul id="menu-main-menu" class="menu">
                                    <li id="menu-item-435"
                                        class="mega-menu hide-header menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children menu-item-435">
                                        <a href="/">Home</a>
                                        <ul class="sub-menu" style="width: 440px; left: -186.746px;">

                                        </ul>
                                    </li>
                                    <li id="menu-item-452"
                                        class="mega-menu hide-header menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-452">
                                        <a href="{{route('front.about')}}">About</a>
                                    </li>
                                    <li id="menu-item-1921"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1921">
                                        <a href="{{route('menu.index')}}">Menu</a>
                                    </li>
                                    <li id="menu-item-447"
                                        class="mega-menu hide-header menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-447">
                                        <a href="#">Blog</a>
                                    </li>
                                    <li id="menu-item-462"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-462">
                                        <a href="#">Pages</a>
                                    </li>
                                    <li id="menu-item-451"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-451">
                                        <a href="#">Reservation</a>
                                    </li>
                                    <li id="menu-item-2398"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2398">
                                        <a href="{{route('contact.index')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-1 col-xs-12">
                        <div class="header-icon-area">
                            <div class="cart-icon-area">
                                <a href="cart/"><i
                                            class="fa fa-shopping-cart"></i> <span class="cart-icon-num">0</span>
                                </a>
                                <div class="cart-icon-products">
                                    <div class="widget woocommerce widget_shopping_cart"><h2 class="widgettitle">
                                            Cart</h2>
                                        <div class="widget_shopping_cart_content">

                                            <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-icon-seperator">|</div>
                            <div class="search-box-area">
                                <div class="search-box">
                                    <form role="search" method="get"
                                          action="{{route('menu.index')}}">
                                        <a href="#"
                                           class="search-close search-close-button">x</a>
                                        <input type="text" name="s" class="search-text" placeholder="Search Here..."
                                               required="" value="{{request('s')}}">
                                        <a href="#"
                                           class="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="rt-header-menu mean-container" id="meanmenu">
        <div class="mean-bar">
            <a href="" alt="Red Chili"><img width="489" height="121"
                                                                                            class="logo-small"
                                                                                            alt="Red Chili"
                                                                                            src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/logo-dark.png')}}"></a>
            <span class="sidebarBtn ">
            <span class="fa fa-bars">
            </span>
        </span>

        </div>

        <div class="rt-slide-nav">
            <div class="offscreen-navigation">
                <nav class="menu-main-menu-container">
                    <ul id="menu-main-menu-1" class="menu">
                        <li class="mega-menu hide-header menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-435 menu-item-parent">
                            <a href="home-2/">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2699">
                                    <a href="food-menu-isotope-3/#">Column
                                        01</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-436">
                                            <a href="">Home 1</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-438">
                                            <a href="home-2/">Home 2</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2751">
                                            <a href="home-3/">Home 3</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1724">
                                            <a href="home-4/">Home 4</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1754">
                                            <a href="home-5/">Home 5</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3000">
                                            <a href="home-6/">Home 6</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2700">
                                    <a href="food-menu-isotope-3/#">Column
                                        02</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2701">
                                            <a href="home-1-onepage/">Home
                                                1 (One Page)</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2752">
                                            <a href="home-2-onepage/">Home
                                                2 (One Page)</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-437">
                                            <a href="home-3-onepage/">Home
                                                3( One Page )</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2750">
                                            <a href="home-4-onepage/">Home
                                                4 (One Page)</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2749">
                                            <a href="home-5-onepage/">Home
                                                5( One Page )</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3038">
                                            <a href="home-6-onepage/">Home
                                                6 (One page)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-menu hide-header menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-452 menu-item-parent">
                            <a href="food-menu-isotope-3/#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-453">
                                    <a href="food-menu-isotope-3/#">Column
                                        01</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460">
                                            <a href="about-1/">About
                                                1</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459">
                                            <a href="about-2/">About
                                                2</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2399">
                                            <a href="contact/">Contact</a>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-525">
                                            <a href="404">Error 404
                                                Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-454">
                                    <a href="food-menu-isotope-3/#">Column
                                        02</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-461">
                                            <a href="blog/">Blog</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2395">
                                            <a href="sunday-brunch-bacon-and-egg-gua-bao/">Single
                                                Post</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2397">
                                            <a href="?s=fish">Search
                                                Result Page</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2424">
                                            <a href="header-variations/">Header
                                                Variations</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-455">
                                    <a href="food-menu-isotope-3/#">Column
                                        03</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2826">
                                            <a href="all-chefs/">All
                                                Chefs</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-rc_chef menu-item-2203">
                                            <a href="chef/jenifer-lynda/">Single
                                                Chef</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2828">
                                            <a href="all-recipes/">All
                                                Recipes</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2401">
                                            <a href="recipe/breadsticks-with-homemade-pizza-sauce-and-homemade-ranch-recipe/">Single
                                                Recipe</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-526">
                                    <a href="food-menu-isotope-3/#">Column
                                        04</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2402">
                                            <a href="all-events/">All
                                                Events</a></li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2403">
                                            <a href="event/pizza-master-class-copy/">Single
                                                Event</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2047">
                                            <a href="shop/">Shop</a>
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2406">
                                            <a href="product/meat-vegetables-gemuesepiess-mushrooms/">Single
                                                Product</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1921 menu-item-parent">
                            <a href="food-menu-isotope-3/#">Elements</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1989">
                                    <a href="about-style-01/">About</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1987">
                                            <a href="about-style-01/">About
                                                Style 01</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1986">
                                            <a href="about-style-02/">About
                                                Style 02</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1988">
                                            <a href="about-style-03/">About
                                                Style 03</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1985">
                                            <a href="about-style-04/">About
                                                Style 04</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1923">
                                    <a href="chef-style-01/">Chef</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1920">
                                            <a href="chef-style-01/">Chef
                                                Style 01</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1919">
                                            <a href="chef-slider-style-02/">Chef
                                                Style 02</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1910">
                                            <a href="all-chefs/">Chef
                                                Grid</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-rc_chef menu-item-2202">
                                            <a href="chef/jenifer-lynda/">Single
                                                Chef</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1925">
                                    <a href="recipe-style-01/">Recipe</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1918">
                                            <a href="recipe-style-01/">Recipe
                                                Style 01</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1917">
                                            <a href="recipe-style-02/">Recipe
                                                style 02</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2213">
                                            <a href="all-recipes/">Recipe
                                                Grid View</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1922">
                                    <a href="event-style/">Event</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1912">
                                            <a href="event-style/">Event
                                                Slider</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1911">
                                            <a href="all-events/">Event
                                                Grid</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1958">
                                            <a href="past-event-grid/">Past
                                                Event Grid</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1959">
                                            <a href="past-event-slider/">Past
                                                Event Slider</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1960">
                                            <a href="upcoming-event-grid/">Upcoming
                                                Event Grid</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1961">
                                            <a href="upcoming-event-slider/">Upcoming
                                                Event Slider</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1924">
                                    <a href="testimonial-style-01/">Testimonial</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1916">
                                            <a href="testimonial-style-01/">Testimonial
                                                Style 01</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1915">
                                            <a href="testimonial-style-02/">Testimonial
                                                Style 02</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1914">
                                            <a href="testimonial-style-03/">Testimonial
                                                Style 03</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1913">
                                            <a href="testimonial-style-04/">Testimonial
                                                Style 04</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2254">
                                    <a href="info-box-style-1/">Info
                                        Box</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2251">
                                            <a href="info-box-style-1/">Info
                                                Box style 1</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2250">
                                            <a href="info-box-style-2/">Info
                                                Box style 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2253">
                                    <a href="counter-style-1/">Counter</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2255">
                                            <a href="counter-style-1/">Counter
                                                Style 1</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2252">
                                            <a href="counter-style-2/">Counter
                                                Style 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-menu hide-header menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children menu-item-447 menu-item-parent">
                            <a href="all-food-menu/">Food Menu</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2996">
                                    <a href="food-menu-isotope-3/#">Column
                                        01</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2157">
                                            <a href="food-menu-card-style-1/">Food
                                                Menu – Card Style 1</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2147">
                                            <a href="food-menu-card-style-2/">Food
                                                Menu – Card Style 2</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2472">
                                            <a href="all-food-menu/">Food
                                                Menu – Card Style 3</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2199">
                                            <a href="food-menu-card-style-4/">Food
                                                Menu – Card Style 4</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2172">
                                            <a href="food-menu-grid-with-load-more/">Food
                                                Menu – Grid Load More</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3174">
                                            <a href="online-order-upmenu/">Online
                                                order ( UPMENU )</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2997">
                                    <a href="food-menu-isotope-3/#">Column
                                        02</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2938">
                                            <a href="food-menu-card-style-5/">Food
                                                Menu – Card Style 5</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-446">
                                            <a href="food-menu-with-isotope/">Food
                                                menu – Isotope 1</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2159">
                                            <a href="food-menu-with-isotope-2/">Food
                                                menu – Isotope 2</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3107 current_page_item menu-item-3114">
                                            <a href="food-menu-isotope-3/"
                                               aria-current="page">food Menu Isotope 3</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2165">
                                            <a href="food-menu-grid-with-pagination/">Food
                                                Menu – Grid Pagination</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2178">
                                            <a href="food-menu-carousel/">Food
                                                Menu – carousel</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2998">
                                    <a href="food-menu-isotope-3/#">Column
                                        03</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2964">
                                            <a href="woocommerce-product-layout-card/">Woocommerce
                                                Food Layout Card</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2989">
                                            <a href="woocommerce-product-layout-card-2/">Woocommerce
                                                Food Layout Card 2</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2963">
                                            <a href="woocommerce-product-layout-isotope/">Woocommerce
                                                Food Layout Isotope</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2990">
                                            <a href="woocommerce-product-layout-carousel/">Woocommerce
                                                Food Layout Carousel</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3098">
                                            <a href="woocommerce-isotope-style-2/">WooCommerce
                                                Isotope Style 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-462 menu-item-parent">
                            <a href="blog/">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-463"><a
                                            href="blog/">Blog</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2208"><a
                                            href="fish-tarka-dreamhouse-dinner/">Single
                                        Post</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-451 menu-item-parent">
                            <a href="reservation/">Reservation</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2398 menu-item-parent">
                            <a href="contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

    @if(Route::currentRouteName() != 'front.index')
    <div id="header-area-space" style="margin-top: 126px;"></div>
    <div class="inner-page-banner-area entry-banner">
        <div class="container">
            <div class="pagination-area">
                <h1>@yield('title')</h1>
                <div class="redchili-pagination"><!-- Breadcrumb NavXT 7.0.2 -->
                    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                                          title="Go to Red Chili."
                                                                          href="/"
                                                                          class="home"><span
                                    property="name">{{setting('name')}}</span></a><meta property="position" content="1"></span>
                    &gt; <span property="itemListElement" typeof="ListItem"><span
                                property="name">@yield('title')</span><meta property="position" content="2"></span>
                </div>
            </div>
        </div>
    </div>
    @endif
    @yield('content')
    <footer>
        <div class="footer-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="single-widget">
                            <div id="redchili_about_widget-3" class="widget widget_redchili_about_widget"><h3
                                        class="widgettitle widget-title-bar">About Cafe</h3>
                                <div class="textwidget">
                                    {!! setting('about_us') !!}
                                </div>
                                <div class="footer-social-media-area">
                                    <ul class="footer-social">
                                        <li>
                                            <a href="food-menu-isotope-3/#"
                                               target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li>
                                            <a href="food-menu-isotope-3/#"
                                               target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li>
                                            <a href="food-menu-isotope-3/#"
                                               target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li>
                                            <a href="food-menu-isotope-3/#"
                                               target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        <li>
                                            <a href="food-menu-isotope-3/#"
                                               target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                        <li>
                                            <a href="food-menu-isotope-3/#"
                                               target="_blank"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="single-widget">
                            <div id="rt-recent-posts-2" class="widget rt_widget_recent_entries_with_image"><h3
                                        class="widget-title-bar">Recent Posts</h3>
                                <div class="media">
                                    <a href="bbq-chicken-with-cauliflower-roasted-garlic-copy/"
                                       class="pull-left" title="Grill Chicken with Coca-cola &amp; Roasted Garlic">
                                        <img width="71" height="69"
                                             src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/1-1-71x69.jpg')}}"
                                             class="attachment-rdtheme-size3 size-rdtheme-size3 wp-post-image" alt=""
                                             loading="lazy">

                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            <a href="bbq-chicken-with-cauliflower-roasted-garlic-copy/">Grill
                                                Chicken with Coca-cola &amp; Roasted Garlic</a></h4>
                                        <p>12 Jun, 2017</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="bbq-chicken-with-cauliflower-roasted-garlic/"
                                       class="pull-left" title="BBQ Chicken with Cauliflower &amp; Roasted Garlic">
                                        <img width="71" height="69"
                                             src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/pexels-photo-106343-71x69.jpeg')}}"
                                             class="attachment-rdtheme-size3 size-rdtheme-size3 wp-post-image" alt=""
                                             loading="lazy">

                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            <a href="bbq-chicken-with-cauliflower-roasted-garlic/">BBQ
                                                Chicken with Cauliflower &amp; Roasted Garlic</a></h4>
                                        <p>12 Jun, 2017</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="fried-grill-nun-double-drinks-friends-combo-pack/"
                                       class="pull-left" title="Fried Grill Nun &amp; Double Drinks Friends Combo Pack">
                                        <img width="71" height="69"
                                             src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/pexels-photo-248422-1-71x69.jpg')}}"
                                             class="attachment-rdtheme-size3 size-rdtheme-size3 wp-post-image" alt=""
                                             loading="lazy">

                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            <a href="fried-grill-nun-double-drinks-friends-combo-pack/">Fried
                                                Grill Nun &amp; Double Drinks Friends Combo Pack</a></h4>
                                        <p>12 Jun, 2017</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="single-widget">
                            <div id="rt-open-hour-5" class="widget rt_widget_open_hour"><h3
                                        class="widgettitle widget-title-bar">We are open</h3>
                                <ul class="opening-schedule">
                                    <li>
                                        Monday <span> 10AM - 9PM </span>
                                    </li>
                                    <li>
                                        Tuesday <span> 4PM - Till Mid Night </span>
                                    </li>
                                    <li>
                                        Wednesday <span> 8AM - 12AM </span>
                                    </li>
                                    <li>
                                        Thursday <span class="os-close">Closed</span>
                                    </li>
                                    <li>
                                        Friday <span> 8PM - 9AM </span>
                                    </li>
                                    <li>
                                        Saturday <span> 7AM - 11PM </span>
                                    </li>
                                    <li>
                                        Sunday <span> 6AM - 11PM </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <p>© Copyright Red Chili 2019. All Right Reserved. Designed and Developed by <a target="_blank"
                                                                                                rel="nofollow"
                                                                                                href="http://ultimatesoft.co"
                                                                                                style="color:#fff">Ultimatesoft LLC</a>
                </p>
            </div>
        </div>
    </footer>
</div>
<a href="food-menu-isotope-3/#" class="scrollToTop"><i
            class="fa fa-arrow-up"></i></a>
<a href="food-menu-isotope-3/#" class="scrollToTop"><i
            class="fa fa-arrow-up"></i></a>
<div id="yith-quick-view-modal">
    <div class="yith-quick-view-overlay"></div>
    <div class="yith-wcqv-wrapper" style="left: 220px; top: 69px; width: 1000px; height: 600px;">
        <div class="yith-wcqv-main">
            <div class="yith-wcqv-head">
                <a href="food-menu-isotope-3/#"
                   id="yith-quick-view-close" class="yith-wcqv-close">X</a>
            </div>
            <div id="yith-quick-view-content" class="woocommerce single-product"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
{{--<script type="text/template" id="tmpl-variation-template">--}}
{{--    <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>--}}
{{--    <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>--}}
{{--    <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>--}}
{{--</script>--}}
<script type="text/template" id="tmpl-unavailable-variation-template">
    <p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<link rel="stylesheet" id="wpo_min-footer-0-css"
      href="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/wpo-minify-footer-b2a5287d.min.css')}}" type="text/css" media="all">
<script type="text/javascript" id="fm-frontend-js-extra">
    /* <![CDATA[ */
    var fmp = {
        "nonceID": "fmp_nonce",
        "nonce": "8f058a6957",
        "ajaxurl": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/foodmenu.js')}}" id="fm-frontend-js"></script>
<script type="text/javascript" id="wpo_min-footer-0-js-extra">
    /* <![CDATA[ */
    var yith_wcwl_l10n = {
        "ajax_url": "\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "enable_ajax_loading": "",
        "ajax_loader_url": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
        "remove_from_wishlist_after_add_to_cart": "1",
        "is_wishlist_responsive": "1",
        "time_to_close_prettyphoto": "3000",
        "fragments_index_glue": ".",
        "reload_on_found_variation": "1",
        "mobile_media_query": "768",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
            "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
            "load_mobile_action": "load_mobile",
            "delete_item_action": "delete_item",
            "save_title_action": "save_title",
            "save_privacy_action": "save_privacy",
            "load_fragments": "load_fragments"
        },
        "nonce": {
            "add_to_wishlist_nonce": "6674b5d344",
            "remove_from_wishlist_nonce": "69c60fa5d3",
            "reload_wishlist_and_adding_elem_nonce": "a39aea8c23",
            "load_mobile_nonce": "05d689c513",
            "delete_item_nonce": "3b4407b56f",
            "save_title_nonce": "7b0a7e84ec",
            "save_privacy_nonce": "5e0ef24e89",
            "load_fragments_nonce": "c42f1c69ed"
        }
    };
    var wpcf7 = {
        "api": {
            "root": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }, "cached": "1"
    };
    var woocommerce_params = {
        "ajax_url": "\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/demo\/wordpress\/redchili\/?wc-ajax=%%endpoint%%"
    };
    var wc_cart_fragments_params = {
        "ajax_url": "\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/demo\/wordpress\/redchili\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_5646d45f7727a3221d8a7e50f9711d91",
        "fragment_name": "wc_fragments_5646d45f7727a3221d8a7e50f9711d91",
        "request_timeout": "5000"
    };
    var yith_qv = {
        "ajaxurl": "\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
        "loader": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif",
        "lang": ""
    };
    var redChiliObj = {
        "ajaxurl": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
        "isEventPage": "0",
        "rc_event_lan": "",
        "rc_event_lat": "",
        "stickyMenu": "1",
        "meanWidth": "1199",
        "back_to_top": "1",
        "extraOffset": "70",
        "extraOffsetMobile": "52",
        "rtl": "no"
    };
    var WC_VARIATION_ADD_TO_CART = {"ajax_url": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php"};
    var _wpUtilSettings = {"ajax": {"url": "\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php"}};
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/demo\/wordpress\/redchili\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes",
        "flexslider": {
            "rtl": false,
            "animation": "slide",
            "smoothHeight": true,
            "directionNav": false,
            "controlNav": "thumbnails",
            "slideshow": false,
            "animationSpeed": 500,
            "animationLoop": false,
            "allowOneSlide": false
        },
        "zoom_enabled": "",
        "zoom_options": [],
        "photoswipe_enabled": "",
        "photoswipe_options": {
            "shareEl": false,
            "closeOnScroll": false,
            "history": false,
            "hideAnimationDuration": 0,
            "showAnimationDuration": 0
        },
        "flexslider_enabled": ""
    };
    var fmp = {
        "nonceID": "fmp_nonce",
        "nonce": "8f058a6957",
        "ajaxurl": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php"
    };
    var fmp = {
        "nonceID": "fmp_nonce",
        "nonce": "8f058a6957",
        "ajaxurl": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/wp-admin\/admin-ajax.php",
        "wc_cart_url": "https:\/\/radiustheme.com\/demo\/wordpress\/redchili\/cart\/"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/wpo-minify-footer-dd07c634.min.js')}}"
        id="wpo_min-footer-0-js"></script>
<link rel="stylesheet" href="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/css2')}}" media="all">
<div style="position: static;">
    <div style="height: 1px; width: 1px; position: absolute; z-index: 100000; top: 0px; visibility: hidden;">
        <iframe id="a2a_sm_ifr" title="AddToAny Utility Frame" transparency="true" allowtransparency="true"
                frameborder="0" src="{{url('front/pages/food Menu Isotope 3 – Red Chili_files/sm.23.html')}}"
                style="height: 1px; width: 1px; border: 0px; left: 0px; top: 0px; position: absolute; z-index: 100000; display: none;"></iframe>
    </div>
</div>


<!-- Cached by WP-Optimize - https://getwpo.com - Last modified: Tue, 05 Jul 2022 04:11:57 GMT -->
<div id="new-tab-sidebar" class="hidden">
    <div class="wrap">
        <img class="new-tab-logo" src="chrome-extension://meffljleomgifbbcffejnmhjagncfpbd/img/128x128.png">

        <ul></ul>
    </div>
</div>

@jquery
@toastr_js
@toastr_render
@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{$error}}')
    </script>

@endforeach
<script>
    $(".search-close-button").on("click",function(){
        alert("ahmad")
    })
</script>
@yield('js')
</body>
</html>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Suguba - Votre Marketplace Internationale</title>
        <meta name="description" content="Suguba - Marketplace internationale pour vendre et gérer votre boutique avec une expérience fluide et accessible à tous.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/png" href="https://suguba.store/favicon.png" />
        <link rel="shortcut icon" type="image/x-icon" href="https://suguba.store/favicon.ico" />

        <!-- CSS here -->
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/preloader.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/bootstrap.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/meanmenu.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/animate.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/owl-carousel.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/swiper-bundle.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/backtotop.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/magnific-popup.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/nice-select.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/flaticon/flaticon.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/font-awesome-pro.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/default.css">
        <link rel="stylesheet" href="https://suguba.store/assets/duka-market/css/style.css">

        <!-- Couleurs personnalisées pour Suguba -->
        <style>
           :root {
              --primary-color: #ff8c00; /* Orange pour le thème de Suguba */
              --secondary-color: #000000; /* Noir pour le contraste */
              --background-color: #f5f5f5; /* Fond général pour une expérience agréable */
              --text-color: #333333; /* Couleur de texte principal */
           }
        </style>
     <link rel='stylesheet' type='text/css' property='stylesheet' href='/_debugbar/assets/stylesheets?v=1733395011&theme=auto' data-turbolinks-eval='false' data-turbo-eval='false'><script src='/_debugbar/assets/javascript?v=1733395011' data-turbolinks-eval='false' data-turbo-eval='false'></script><script data-turbo-eval='false'>jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { doc.documentElement.classList.add('sf-js-enabled'); var rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').slice(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.slice(1); elt.className += ' sf-dump-hover'; elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .sf-js-enabled .phpdebugbar pre.sf-dump .sf-dump-compact, .sf-js-enabled .sf-dump-str-collapse .sf-dump-str-collapse, .sf-js-enabled .sf-dump-str-expand .sf-dump-str-expand { display: none; } .sf-dump-hover:hover { background-color: #B729D9; color: #FFF !important; border-radius: 2px; } .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline-flex; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-virtual{font-style:italic}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>
</head>

   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!-- preloader start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <svg viewBox="0 0 58 58" id="mustard" class="product">
                <g>
                <path style="fill:#ff8c00;" d="M39.869,58H18.131C16.954,58,16,57.046,16,55.869V12.621C16,11.726,16.726,11,17.621,11h22.757
                    C41.274,11,42,11.726,42,12.621v43.248C42,57.046,41.046,58,39.869,58z" />
                <polygon style="fill:#ff8c00;;" points="35,11 23,11 27.615,0 30.385,0 	" />
                <rect x="16" y="16" style="fill:#ff8c00;;" width="26" height="2" />
                <rect x="20" y="11" style="fill:##ff8c00;;" width="2" height="6" />
                <rect x="25" y="11" style="fill:##ff8c00;;" width="2" height="6" />
                <rect x="30" y="11" style="fill:##ff8c00;;" width="2" height="6" />
                <rect x="36" y="11" style="fill:##ff8c00;;" width="2" height="6" />
                <circle style="fill:##ff8c00;;" cx="29" cy="36" r="10" />
                </g>
                </svg>
                <svg viewBox="0 0 49.818 49.818" id="meat" class="product">
                    <g>
                    <path style="fill:##ff8c00;;" d="M0.953,38.891c0,0,3.184,6.921,11.405,9.64c1.827,0.604,3.751,0.751,5.667,0.922
                        c7.866,0.703,26.714-0.971,31.066-18.976c1.367-5.656,0.76-11.612-1.429-17.003C44.51,5.711,37.447-4.233,22.831,2.427
                        c-8.328,3.795-7.696,10.279-5.913,14.787c2.157,5.456-2.243,11.081-8.06,10.316C1.669,26.584-1.825,30.904,0.953,38.891z" />
                    <g>
                        <path style="fill:##ff8c00;;" d="M4.69,37.18c0.402,0.785,3.058,5.552,9.111,7.554c1.335,0.441,2.863,0.577,4.482,0.72l0.282,0.025
                            c0.818,0.073,1.698,0.11,2.617,0.11c18.18,0,22.854-11.218,24.02-16.041c1.134-4.693,0.706-9.703-1.235-14.488
                            C41.049,7.874,36.856,4.229,31.506,4.229c-2.21,0-4.683,0.615-7.349,1.83c-2.992,1.364-6.676,3.921-4.13,10.36
                            c1.284,3.25,0.912,6.746-1.023,9.591c-2.17,3.191-6.002,4.901-9.895,4.39c-0.493-0.065-0.966-0.099-1.404-0.099
                            c-1.077,0-2.502,0.198-3.173,1.143C3.765,32.524,3.823,34.609,4.69,37.18z" />
                        <path style="fill:##ff8c00;;" d="M21.184,46.589c-0.948,0-1.858-0.038-2.706-0.114l-0.283-0.025
                            c-1.674-0.147-3.257-0.287-4.706-0.767c-6.376-2.108-9.188-7.073-9.688-8.047l-0.058-0.137c-0.984-2.917-0.993-5.273-0.026-6.635
                            c0.912-1.285,2.89-1.807,5.524-1.456c3.537,0.466,6.959-1.054,8.936-3.961c1.746-2.565,2.082-5.723,0.921-8.661
                            c-3.189-8.065,2.707-10.754,4.645-11.638c9.68-4.407,16.81-1.155,21.152,9.535c2.021,4.981,2.464,10.202,1.28,15.099
                            C44.953,34.836,40.073,46.589,21.184,46.589z M5.613,36.787c0.401,0.758,2.936,5.155,8.503,6.997
                            c1.229,0.406,2.699,0.536,4.256,0.673l0.284,0.025c0.788,0.07,1.639,0.106,2.527,0.106c17.469,0,21.938-10.683,23.048-15.276
                            c1.084-4.487,0.672-9.286-1.19-13.877C40.29,8.663,36.409,5.229,31.506,5.229c-2.067,0-4.4,0.585-6.934,1.74
                            c-3.02,1.376-5.81,3.532-3.615,9.083c1.408,3.563,0.998,7.398-1.126,10.521c-2.404,3.534-6.563,5.386-10.852,4.818
                            c-1.793-0.236-3.197,0.019-3.632,0.632C4.912,32.636,4.756,34.207,5.613,36.787z" />
                    </g>
                    <g>
                        <circle style="fill:#E6E6E6;" cx="32.455" cy="12.779" r="4" />
                        <path style="fill:#7A3726;" d="M32.455,17.779c-2.757,0-5-2.243-5-5s2.243-5,5-5s5,2.243,5,5S35.212,17.779,32.455,17.779z
                            M32.455,9.779c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S34.109,9.779,32.455,9.779z" />
                    </g>
                    <path style="fill:#C64940;" d="M25.617,45.684l-1.941-0.479c0.435-1.761-1.063-3.216-3.446-4.859
                        c-2.875-1.984-4.817-5.117-5.327-8.595c-0.186-1.266-0.425-2.285-0.428-2.295l1.922-0.548c0.01,0.028,1.09,3.104,3.978,4.314
                        c2.094,0.877,4.667,0.598,7.648-0.832c11.578-5.554,17.102-2.646,17.332-2.52l-0.967,1.752c-0.04-0.021-4.97-2.48-15.5,2.57
                        c-3.53,1.694-6.662,1.984-9.312,0.863c-0.801-0.339-1.49-0.779-2.078-1.265c0.769,1.974,2.11,3.695,3.867,4.907
                        C23.149,39.931,26.472,42.222,25.617,45.684z" />
                    <path style="fill:#C64940;" d="M27.074,27.586c-5.37,0-7.605-3.694-7.633-3.74l1.727-1.01l-0.863,0.505l0.859-0.511
                        c0.108,0.179,2.714,4.335,9.738,2.105c1.54-0.794,12.038-6.002,15.619-2.289l-1.439,1.389c-1.979-2.052-9.229,0.576-13.332,2.714
                        l-0.154,0.064C29.892,27.364,28.389,27.586,27.074,27.586z" />
                    </g>
                </svg>
                <svg viewBox="0 0 49 49" id="soda" class="product">
                    <g>
                    <path style="fill:#E22F37;" d="M9.5,27V5.918c0-1.362,0.829-2.587,2.094-3.093l0,0C12.642,2.406,13.5,1.14,13.5,0.011L13.5,0v0
                        l11,0l11,0v0v0.011c0,1.129,0.858,2.395,1.906,2.814l0,0c1.265,0.506,2.094,1.73,2.094,3.093V27v-5v21.082
                        c0,1.362-0.829,2.587-2.094,3.093h0c-1.048,0.419-1.906,1.686-1.906,2.814V49l0,0h-11h-11l0,0l0-0.011
                        c0-1.129-0.858-2.395-1.906-2.814h0c-1.265-0.506-2.094-1.73-2.094-3.093V22" />
                    <path style="fill:##ff8c00;;" d="M18.5,7h-5c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S19.053,7,18.5,7z" />
                    <path style="fill:##ff8c00;;" d="M35.5,7h-13c-0.553,0-1-0.447-1-1s0.447-1,1-1h13c0.553,0,1,0.447,1,1S36.053,7,35.5,7z" />
                    <path style="fill:##ff8c00;;" d="M18.5,45h-5c-0.553,0-1-0.447-1-1s0.447-1,1-1h5c0.553,0,1,0.447,1,1S19.053,45,18.5,45z" />
                    <path style="fill:##ff8c00;;" d="M35.5,45h-13c-0.553,0-1-0.447-1-1s0.447-1,1-1h13c0.553,0,1,0.447,1,1S36.053,45,35.5,45z" />
                    <polygon style="fill:#E6E6E6;" points="39.5,32 9.5,42 9.5,20 39.5,10 	" />
                    <polygon style="fill:#F9D70B;" points="39.5,28 9.5,38 9.5,24 39.5,14 	" />
                    </g>
                </svg>
                <div class="cart-container">
                    <svg viewBox="0 0 512 512" id="cart">
                    <circle cx="376.8" cy="440" r="55" />
                    <circle cx="192" cy="440" r="55" />
                    <polygon points="128,0 0.8,0 0.8,32 104.8,32 136.8,124.8 170.4,124.8 " />
                    <polygon style="fill:##ff8c00;;" points="250.4,49.6 224,124.8 411.2,124.8 " />
                    <polygon style="fill:##ff8c00;;" points="411.2,124.8 224,124.8 170.4,124.8 136.8,124.8 68,124.8 141.6,361.6 427.2,361.6
                    511.2,124.8 " />
                    <g>
                        <rect x="166.4" y="185.6" style="fill:#FFFFFF;" width="255.2" height="16" />
                        <rect x="166.4" y="237.6" style="fill:#FFFFFF;" width="166.4" height="16" />
                    </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

    <!-- header-start -->
    <header class="header d-blue-bg">
        <div class="header-top">
            <div class="container 0">
                <div class="header-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-7">
                            <div class="header-inner-start">
                                <div class="header__currency border-right">
                                    <div class="s-name">
                                        <span>Langue :</span>
                                    </div>
                                    <select>
                                        <option>Anglais</option>
                                        <option>Allemand</option>
                                        <option>Français</option>
                                        <option>Espagnol</option>
                                    </select>
                                </div>
                                <div class="header__lang border-right">
                                    <div class="s-name">
                                        <span>Devise :</span>
                                    </div>
                                    <select>
                                        <option>USD</option>
                                        <option>EUR</option>
                                        <option>INR</option>
                                        <option>BDT</option>
                                        <option>BGD</option>
                                    </select>
                                </div>
                                <div class="support d-none d-sm-block">
                                    <p>Besoin d'aide ? <a href="tel:+001123456789">+001 123 456 789</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                            <div class="header-inner-end text-md-end">
                                <div class="ovic-menu-wrapper ovic-menu-wrapper-2">
                                    <ul>
                                        <li><a href="about.html">À propos de nous</a></li>
                                        <li><a href="contact.html">Suivi de commande</a></li>
                                        <li><a href="contact.html">Contactez-nous</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid">
            <div class="container">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info header__info-2">
                                <div class="logo logo-3">
                                    <a href="/"><img src="https://suguba.store/logo.png" alt="logo" height="96"></a>
                                </div>
                                <div class="side-menu mr-20">
                                    <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="header__search">
                                <form action="#">
                                    <div class="header__search-box">
                                        <input class="search-input search-input-2" type="text" placeholder="Je cherche...">
                                        <button class="button button-2 button-3" type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <div class="header__search-cat">
                                        <select>
                                            <option>Toutes les catégories</option>
                                            <option>Produits les plus vendus</option>
                                            <option>Top 10 des offres</option>
                                            <option>Nouveautés</option>
                                            <option>Téléphones &amp; Tablettes</option>
                                            <option>Électronique &amp; Digital</option>
                                            <option>Mode &amp; Vêtements</option>
                                            <option>Bijoux &amp; Montres</option>
                                            <option>Santé &amp; Beauté</option>
                                            <option>Son &amp; Haut-parleurs</option>
                                            <option>TV &amp; Audio</option>
                                            <option>Informatique</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                            <div class="header-action">
                                <div class="block-userlink">
                                    <a class="icon-link icon-link-2" href="my-account.html">
                                        <i class="flaticon-user"></i>
                                        <span class="text">
                                            <span class="sub" style="color: #ff8c00;">Connexion</span>
                                        Mon compte </span>
                                    </a>
                                </div>
                                <div class="block-wishlist action">
                                    <a class="icon-link icon-link-2" href="wishlist.html">
                                        <i class="flaticon-heart"></i>
                                        <span class="count count-2">0</span>
                                        <span class="text">
                                        <span class="sub" <span class="sub" style="color: #ff8c00;">Favoris</span>
                                        Ma Liste de souhaits </span>
                                    </a>
                                </div>
                                <div class="block-cart action">
                                    <a class="icon-link icon-link-2" href="cart.html">
                                        <i class="flaticon-shopping-bag"></i>
                                        <span class="count count-2">1</span>
                                        <span class="text">
                                        <span class="sub" < class="sub" style="color: #ff8c00;">Votre Panier:</span>
                                        00,00 € </span>
                                    </a>
                                    <div class="cart">
                                        <div class="cart__mini">
                                            <ul>
                                                <li>
                                                    <div class="cart__title">
                                                        <h4>Votre Panier</h4>
                                                        <span>(1 article dans le panier)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart__item d-flex justify-content-between align-items-center">
                                                        <div class="cart__inner d-flex">
                                                            <div class="cart__thumb">
                                                                <a href="product-details.html">
                                                                    <img src="https://suguba.store/assets/duka-market/img/cart/20.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="cart__details">
                                                                <h6><a href="product-details.html"> Samsung C49J89 : 875 £, Debenhams Plus </a></h6>
                                                                <div class="cart__price">
                                                                    <span>255,00 €</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart__del">
                                                            <a href="#"><i class="fal fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart__sub d-flex justify-content-between align-items-center">
                                                        <h6>Sous-total</h6>
                                                        <span class="cart__sub-total">255,00 €</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="cart.html" class="wc-cart mb-10">Voir le panier</a>
                                                    <a href="checkout.html" class="wc-checkout">Passer à la caisse</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom d-none d-lg-block">
            <div class="container">
                <div class="box-items-inner pt-10 pb-10">
                    <div class="box-item">
                        <a href="shop.html">
                            <i class="fal fa-desktop"></i>
                            Ordinateurs <br> & Laptops
                        </a>
                    </div>
                    <div class="box-item">
                        <a href="shop.html">
                            <i class="fal fa-mobile"></i>
                            Tablettes <br> & Téléphones
                        </a>
                    </div>
                    <div class="box-item">
                        <a href="shop.html">
                            <i class="fal fa-router"></i>
                            Électronique <br> & Digital
                        </a>
                    </div>
                    <div class="box-item">
                        <a href="shop.html">
                            <i class="fal fa-webcam"></i>
                            Caméras <br> & Accessoires
                        </a>
                    </div>
                    <div class="box-item">
                        <a href="shop.html">
                            <i class="fal fa-bed-alt"></i>
                            Décor <br> & Meubles
                        </a>
                    </div>
                    <div class="box-item">
                        <a href="shop.html">
                            <i class="fal fa-tshirt"></i>
                            Mode <br> & Vêtements
                        </a>
                    </div>
                    <div class="box-item d-lg-none">
                        <a href="shop.html">
                            <i class="fal fa-hat-chef"></i>
                            Jardin <br> & Cuisine Maison
                        </a>
                    </div>
                    <div class="box-item d-lg-none d-xl-block">
                        <a href="shop.html">
                            <i class="fal fa-speaker"></i>
                            Audio <br> & Casques
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <!-- header-end -->

    <!-- //side-menu -->
    <div class="main-menu">
        <nav id="mobile-menu-2">
            <ul>
                <li>
                    <a href="/" class="active">Home <i class="far fa-angle-down"></i></a>
                    <ul class="megamenu-1">
                        <li><a href="/">Home Pages</a>
                            <ul class="mega-item">
                                <li><a href="/">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html" class="active">Home Three</a></li>
                                <li><a href="product-details.html">Shop 3 Column</a></li>
                                <li><a href="product-details.html">Shop 4 Column</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Product Pages</a>
                            <ul class="mega-item">
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="product-details.html">Product V2</a></li>
                                <li><a href="product-details.html">Product V3</a></li>
                                <li><a href="product-details.html">Varriable Product</a></li>
                                <li><a href="product-details.html">External Product</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Other Pages</a>
                            <ul class="mega-item">
                                <li><a href="product-details.html">wishlist</a></li>
                                <li><a href="product-details.html">Shopping Cart</a></li>
                                <li><a href="product-details.html">Checkout</a></li>
                                <li><a href="product-details.html">Login</a></li>
                                <li><a href="product-details.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Phone &amp; Tablets</a>
                            <ul class="mega-item">
                                <li><a href="product-details.html">Catagory 1</a></li>
                                <li><a href="product-details.html">Catagory 2</a></li>
                                <li><a href="product-details.html">Catagory 3</a></li>
                                <li><a href="product-details.html">Catagory 4</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Phone &amp; Tablets</a>
                            <ul class="mega-item">
                                <li><a href="product-details.html">Catagory 1</a></li>
                                <li><a href="product-details.html">Catagory 2</a></li>
                                <li><a href="product-details.html">Catagory 3</a></li>
                                <li><a href="product-details.html">Catagory 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="shop.html">Shop <i class="far fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="shop.html">shop</a></li>
                        <li><a href="shop-details.html">Shop Details</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog <i class="far fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="about.html">Pages <i class="far fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="product-details.html">Product Details</a></li>
                        <li><a href="faq.html">FAQs pages</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="404.html">404 Error</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__logo mb-40">
                <a href="/">
                <img src="https://suguba.store/assets/duka-market/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="offcanvas__search mb-25">
                <form action="#">
                    <input type="text" placeholder="What are you searching for?">
                    <button type="submit" ><i class="far fa-search"></i></button>
                </form>
            </div>
            <div class="sidebar__img mb-20">
                <div class="row gx-2">
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="https://suguba.store/assets/duka-market/img/gallery/gal-1.jpg">
                            <img src="https://suguba.store/assets/duka-market/img/gallery/gal-1.jpg" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="https://suguba.store/assets/duka-market/img/gallery/gal-2.jpg">
                            <img src="https://suguba.store/assets/duka-market/img/gallery/gal-2.jpg" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="https://suguba.store/assets/duka-market/img/gallery/gal-3.jpg">
                            <img src="https://suguba.store/assets/duka-market/img/gallery/gal-3.jpg" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="https://suguba.store/assets/duka-market/img/gallery/gal-4.jpg">
                            <img src="https://suguba.store/assets/duka-market/img/gallery/gal-4.jpg" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="https://suguba.store/assets/duka-market/img/gallery/gal-5.jpg">
                            <img src="https://suguba.store/assets/duka-market/img/gallery/gal-5.jpg" alt="">
                         </a>
                      </div>
                   </div>
                   <div class="col-4">
                      <div class="sidebar__single-img hover-effect w-img mb-10">
                         <a class="popup-image" href="https://suguba.store/assets/duka-market/img/gallery/gal-6.jpg">
                            <img src="https://suguba.store/assets/duka-market/img/gallery/gal-6.jpg" alt="">
                         </a>
                      </div>
                   </div>
                </div>
             </div>
            <div class="mobile-menu-2"></div>
            <div class="offcanvas__action">
            </div>
        </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>

        <!-- slider-area-start -->
        <div class="slider-area light-bg-s pt-60">
            <div class="container 0">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="swiper-container slider__active pb-30">
                            <div class="slider-wrapper swiper-wrapper">
                                <div class="single-slider swiper-slide b-radius-2 slider-height-3 d-flex align-items-center" data-background="https://suguba.store/assets/duka-market/img/slider/03-slide-1.jpg">
                                    <div class="slider-content slider-content-2">
                                        <div class="slider-top-btn mb-20" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">
                                            <a href="shop.html" class="st-btn b-radius">HOT DEALS</a>
                                        </div>
                                        <h2 data-animation="fadeInLeft" data-delay="1.7s" class="pt-15 slider-title pb-5">BIG SALE <br> TOP HEADPHONE</h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.9s">Best Sport Edition 2022</p>
                                        <div class="slider-bottom-btn mt-65">
                                            <a data-animation="fadeInUp" data-delay="1.15s" href="shop.html" class="st-btn-border b-radius-2">Discover now</a>
                                        </div>
                                    </div>
                                </div><!-- /single-slider -->
                                <div class="single-slider swiper-slide b-radius-2 slider-height-3 d-flex align-items-center" data-background="https://suguba.store/assets/duka-market/img/slider/03-slide-2.jpg">
                                    <div class="slider-content slider-content-2">
                                        <div class="slider-top-btn mb-20" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">
                                            <a href="shop.html" class="st-btn b-radius">HOT DEALS</a>
                                        </div>
                                        <h2 data-animation="fadeInLeft" data-delay="1.5s" class="pt-15 slider-title pb-5">GEAR 360<br> WiRELESS LARBUDS</h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.7s">Top Quality Earbuds & Accessories</p>
                                        <div class="slider-bottom-btn mt-65">
                                            <a data-animation="fadeInUp" data-delay="1.9s" href="shop.html" class="st-btn-border b-radius-2">Discover now</a>
                                        </div>
                                    </div>
                                </div><!-- /single-slider -->
                                <div class="single-slider b-radius-2 swiper-slide slider-height-3 d-flex align-items-center" data-background="https://suguba.store/assets/duka-market/img/slider/03-slide-3.jpg">
                                    <div class="slider-content slider-content-2">
                                        <div class="slider-top-btn mb-20" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">
                                            <a href="shop.html" class="st-btn b-radius">HOT DEALS</a>
                                        </div>
                                        <h2 data-animation="fadeInLeft" data-delay="1.5s" class="pt-15 slider-title pb-5">LIMITED<br>
                                        WEEK DEALS</h2>
                                        <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.8s">Discount 20% On Products
                                        </p>
                                        <div class="slider-bottom-btn mt-65">
                                            <a data-animation="fadeInUp" data-delay="1.10s" href="shop.html" class="st-btn-border b-radius-2">Discover now</a>
                                        </div>
                                    </div>
                                </div><!-- /single-slider -->
                                <div class="main-slider-paginations"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-sm-6">
                                        <div class="banner__item p-relative w-img mb-30">
                                            <div class="banner__img banner__img-2 b-radius-2">
                                                <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/banner/banner-17.jpg" alt=""></a>
                                            </div>
                                            <div class="banner__content">
                                                <h6><a href="product-details.html">New Style <br> Bluetooh Speaker</a></h6>
                                                <p class="banner-p mt-30">Free Shipping 20km</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-sm-6">
                                        <div class="banner__item p-relative w-img mb-30">
                                            <div class="banner__img banner__img-2 b-radius-2">
                                                <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/banner/banner-18.jpg" alt=""></a>
                                            </div>
                                            <div class="banner__content">
                                                <h6><a href="product-details.html">Limited <br> Top Camera</a></h6>
                                                <p class="banner-p mt-30">Free Shipping 20km</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="banner__item p-relative w-img mb-30">
                                    <div class="banner__img banner__img-3  b-radius-2">
                                        <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/banner/banner-19.jpg" alt=""></a>
                                    </div>
                                    <div class="banner__content banner__content-3">
                                        <div class="banner-df-btn mb-15">
                                            <a href="#" class="st-btn b-radius">HOT DEALS</a>
                                        </div>
                                        <p>Xbox Wireless</p>
                                        <h6 class="df-title"><a href="product-details.html">Sale Up To 50% Off</a></h6>
                                        <div class="bottom-btn">
                                            <a href="shop.html" class="st-btn-border-2 b-radius">Discover now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider-area-end -->

        <!-- top-dels-start -->
        <section class="top-dels light-bg-s pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile-d st-titile-d-2">Top Deals Of The Day</h5>
                            </div>
                            <div class="offer-time">
                                <span class="offer-title d-none d-sm-block">Hurry Up! Offer ends in:</span>
                                <div class="countdown">
                                    <div class="countdown-inner b-radius-2" data-countdown="" data-date="Mar 02 2022 20:20:22">
                                        <ul class="text-center">
                                            <li><span data-days="">30</span> Days</li>
                                            <li><span data-hours="">9</span> Hours</li>
                                            <li><span data-minutes="">37</span> Mins</li>
                                            <li><span data-seconds="">38</span> Secs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-xxl-5 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                    <div class="col">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-1.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                <span class="discount">-15%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-3">
                                <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular 64G</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-20">
                                    <span>$105-$110</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:315/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-2.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-3">
                                <h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-20">
                                    <span>$105-$150</span>
                                </div><div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:315/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-3.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                <span class="discount">-9%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-3">
                                <h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-20">
                                    <span>$200-$280</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:315/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-7.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-3">
                                <h6><a href="product-details.html">APPO R11s 64GB Dual 20MP Cameras</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-20">
                                    <span>$150.00-$270.00</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:315/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-10.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product__content-3">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-3">
                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price mb-20">
                                    <span>$120.00-$210.00</span>
                                </div>
                                <div class="progress mb-5">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress-rate">
                                    <span>Sold:315/1225</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top-dels-end -->

        <!-- featured-start -->
        <section class="featured light-bg-s pt-50 pb-40">
            <div class="container 0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">Top Featured Products</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="product.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="single-features-item single-features-item-d b-radius-2 mb-20">
                            <div class="row  g-0 align-items-center">
                                <div class="col-md-6">
                                    <div class="features-thum">
                                        <div class="features-product-image w-img">
                                            <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fpsm-2.jpg" alt=""></a>
                                        </div>
                                        <div class="product-action product-action-2">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product__content product__content-d product__content-d-2">
                                        <h6><a href="product-details.html">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
                                        <div class="rating mb-5">
                                            <ul class="rating-d">
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price d-price mb-10">
                                            <span>$307.00 <del>$110</del></span>
                                        </div>
                                        <div class="features-des mb-25">
                                            <ul>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                            </ul>
                                        </div>
                                        <div class="cart-option">
                                            <a href="cart.html" class="cart-btn-4 w-100 mr-10">Add to Cart</a>
                                            <a href="cart.html" class="transperant-btn-2"><i class="fal fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-1.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-15%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Epple Watch SE Gold Aluminum</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price d-price">
                                                    <span>$307.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-2.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-5%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price d-price">
                                                    <span>$210.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-3.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-25%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Solo3 Wireless On-Ear Headphones</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$160.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-6">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-6.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Men’s Short-Sleeve Pocket Oxford Shirt</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$280.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured-end -->

        <!-- banner__area-start -->
        <section class="banner__area light-bg-s pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item p-relative w-img mb-30">
                            <div class="banner__img b-radius-2">
                                <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/banner/banner-1.jpg" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <h6><a href="product-details.html">Intelligent <br> New Touch Control</a></h6>
                                <p>Discount  20% On Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img b-radius-2">
                                <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/banner/banner-2.jpg" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <h6><a href="product-details.html">On-sale <br> Best Prices</a></h6>
                                <p>Limited Time: Online Only!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item p-relative mb-30 w-img">
                            <div class="banner__img b-radius-2">
                                <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/banner/banner-3.jpg" alt=""></a>
                            </div>
                            <div class="banner__content">
                                <h6><a href="product-details.html">Hot Sale <br> Super Laptops 2022 </a></h6>
                                <p>Free Shipping All Order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner__area-end -->

        <!-- trending-product-area-start -->
        <section class="trending-product-area light-bg-s pt-20 pb-15">
            <div class="container 0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">Hot Trending Products</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="product.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-1.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                <span class="discount">-15%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Epple iPad Pro 10.5-inch Cellular 64G</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$105-$110</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-2.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$105-$150</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-3.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product__offer">
                                <span class="discount">-9%</span>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$200-$280</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-7.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">APPO R11s 64GB Dual 20MP Cameras</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$150.00-$270.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-10.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$120.00-$210.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
                        <div class="product__item product__item-2 b-radius-2 mb-20">
                            <div class="product__thumb fix">
                                <div class="product-image w-img">
                                    <a href="product-details.html">
                                        <img src="https://suguba.store/assets/duka-market/img/product/tp-9.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="product-action product-action-2">
                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                        <i class="fal fa-eye"></i>
                                        <i class="fal fa-eye"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-heart"></i>
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" class="icon-box icon-box-1">
                                        <i class="fal fa-layer-group"></i>
                                        <i class="fal fa-layer-group"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product__content product__content-2">
                                <h6><a href="product-details.html">Epple iPhone 11 Pro Max 64GB Gold</a></h6>
                                <div class="rating mb-5 mt-10">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    <span>(01 review)</span>
                                </div>
                                <div class="price">
                                    <span>$120.00-$140.00</span>
                                </div>
                            </div>
                            <div class="product__add-cart text-center">
                                <button type="button" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending-product-area-end -->

        <!-- doubale-product-area-start -->
        <div class="doubale-product-area light-bg-s pt-20 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__head d-flex justify-content-between mb-30">
                                    <div class="section__title section__title-2">
                                        <h5 class="st-titile">Hot Trending Products</h5>
                                    </div>
                                    <div class="button-wrap button-wrap-2">
                                        <a href="product.html">See All <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-2.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-5%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price d-price">
                                                    <span>$210.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-3.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-25%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Solo3 Wireless On-Ear Headphones</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$160.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-6.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Men’s Short-Sleeve Pocket Oxford Shirt</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$280.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__head d-flex justify-content-between mb-30">
                                    <div class="section__title section__title-2">
                                        <h5 class="st-titile">On-sale Products</h5>
                                    </div>
                                    <div class="button-wrap button-wrap-2">
                                        <a href="product.html">See All <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-7.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">OnePlus Nord N100 64GB, 4GB RAM</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price d-price">
                                                    <span>$245.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-8.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-25%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Smartwatch with Heart Rate 256bpm</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$130.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-9.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Samsang Galaxy A21S 4GB Ram, 128Gb</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$180.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section__head d-flex justify-content-between mb-30">
                                    <div class="section__title section__title-2">
                                        <h5 class="st-titile">Top Rate Products</h5>
                                    </div>
                                    <div class="button-wrap button-wrap-2">
                                        <a href="product.html">See All <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-10.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-5%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">Apple iPhone XR 64GB Red Dual-SIM</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price d-price">
                                                    <span>$165.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-11.jpg" alt=""></a>
                                                </div>
                                                <div class="product__offer">
                                                    <span class="discount">-25%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">MW65 Wireless Headphones Z1000</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$130.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="single-features-item b-radius-2 mb-20">
                                    <div class="row  g-0 align-items-center">
                                        <div class="col-4">
                                            <div class="features-thum">
                                                <div class="features-product-image w-img">
                                                    <a href="product-details.html"><img src="https://suguba.store/assets/duka-market/img/features-product/fp-12.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="product__content product__content-d product__content-d-2">
                                                <h6><a href="product-details.html">All-new Fire HD 10 Tablet 10.1″ Full HD</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>$140.00 <del>$110</del></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- doubale-product-area-end -->

        <!-- moveing-text-area-start -->
        <section class="moveing-text-area">
            <div class="container">
                <div class="ovic-running">
                    <div class="wrap">
                        <div class="inner">
                            <p class="item">Free UK Delivery - Return Over $100.00 ( Excluding Homeware )   |   Free UK Collect From Store</p>
                            <p class="item">Design Week / 15% Off the website / Code: AYOSALE-2020</p>
                            <p class="item">Always iconic. Now organic. Introducing the $20 Organic Tee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- moveing-text-area-end -->

        <!-- blog-area-start -->
        <div class="blog-area pt-55 pb-75">
            <div class="container 0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-30">
                            <div class="section__title section__title-2">
                                <h5 class="st-titile">From The Blog</h5>
                            </div>
                            <div class="button-wrap button-wrap-2">
                                <a href="blog.html">See All Product <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image blog-image-2 w-img">
                                    <a href="blog-details.html"><img src="https://suguba.store/assets/duka-market/img/blog/sm-b-1.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="blog.html">Digital</a>
                                </div>
                            </div>
                            <div class="smblog-content smblog-content-2">
                                <h6><a href="blog-details.html">How mobile phones have changed people’s lives in the world</a></h6>
                                <span class="author mb-10">posted by <a href="#">Adlop</a></span>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="blog-details.html"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="blog-details.html">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image blog-image-2 w-img">
                                    <a href="blog-details.html"><img src="https://suguba.store/assets/duka-market/img/blog/sm-b-2.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="blog.html">New</a>
                                </div>
                            </div>
                            <div class="smblog-content smblog-content-2">
                                <h6><a href="blog-details.html">Top 5 Best Digital Cameras for 2021 You Should Buy</a></h6>
                                <span class="author mb-10">posted by <a href="#">Angelia</a></span>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="blog-details.html">Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="blog-details.html">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image blog-image-2 w-img">
                                    <a href="blog-details.html"><img src="https://suguba.store/assets/duka-market/img/blog/sm-b-3.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="blog.html">Update</a>
                                </div>
                            </div>
                            <div class="smblog-content smblog-content-2">
                                <h6><a href="blog-details.html">Capture the moment with 4 cameras on Oppo A92</a></h6>
                                <span class="author mb-10">posted by <a href="#">Iqbal</a></span>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="blog-details.html"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="blog-details.html">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                        <div class="single-smblog mb-30">
                            <div class="smblog-thum">
                                <div class="blog-image blog-image-2 w-img">
                                    <a href="blog-details.html"><img src="https://suguba.store/assets/duka-market/img/blog/sm-b-4.jpg" alt=""></a>
                                </div>
                                <div class="blog-tag">
                                    <a href="blog.html">Offer</a>
                                </div>
                            </div>
                            <div class="smblog-content smblog-content-2">
                                <h6><a href="blog-details.html">Use Headphones Properly Not To Damage Your Hearing</a></h6>
                                <span class="author mb-10">posted by <a href="#">Jenny</a></span>
                                <div class="smblog-foot pt-15">
                                    <div class="post-readmore">
                                        <a href="blog-details.html"> Read More <span class="icon"></span></a>
                                    </div>
                                    <div class="post-date">
                                        <a href="blog-details.html">Jan 24, 2022</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area-end -->

        <!-- brand-area-start -->
        <section class="brand-area brand-area-d">
            <div class="container">
                <div class="brand-slider swiper-container pt-50 pb-45">
                    <div class="swiper-wrapper">
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="https://suguba.store/assets/duka-market/img/brand/brand-1.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="https://suguba.store/assets/duka-market/img/brand/brand-2.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="https://suguba.store/assets/duka-market/img/brand/brand-3.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="https://suguba.store/assets/duka-market/img/brand/brand-4.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="https://suguba.store/assets/duka-market/img/brand/brand-5.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-item w-img swiper-slide">
                            <a href="#"><img src="https://suguba.store/assets/duka-market/img/brand/brand-6.jpg" alt="brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand-area-end -->

    <!-- shop modal start -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-box">
                                <div class="tab-content" id="modalTabContent">
                                    <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-view-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-view-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-view-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-view-4.jpg" alt="">
                                        </div>
                                    </div>
                                    </div>
                                <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                            <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-nav-1.jpg" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                        <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-nav-2.jpg" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                        <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-nav-3.jpg" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                        <img src="https://suguba.store/assets/duka-market/img/quick-view/quick-nav-4.jpg" alt="">
                                        </button>
                                    </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-content">
                                <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                <div class="product__review d-sm-flex">
                                    <div class="rating rating__shop mb-10 mr-30">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    </div>
                                    <div class="product__add-review mb-15">
                                    <span>01 review</span>
                                    </div>
                                </div>
                                <div class="product__price">
                                    <span>$109.00 – $307.00</span>
                                </div>
                                <div class="product__modal-des mt-20 mb-15">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                        <li><a href="#"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                        <li><a href="#"><i class="fas fa-circle"></i> Memory, Storage & SIM: 12GB RAM, 256GB.</a></li>
                                        <li><a href="#"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                    </ul>
                                </div>
                                <div class="product__stock mb-20">
                                    <span class="mr-10">Availability :</span>
                                    <span>1795 in stock</span>
                                </div>
                                <div class="product__modal-form">
                                    <form action="#">
                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                        <div class="product-quantity mr-20 mb-25">
                                            <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                        </div>
                                        <div class="pro-cart-btn mb-25">
                                            <button class="cart-btn" type="submit">Add to cart</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="product__stock mb-30">
                                    <ul>
                                        <li><a href="#">
                                            <span class="sku mr-10">SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span></a>
                                        </li>
                                        <li><a href="#">
                                            <span class="cat mr-10">Categories:</span>
                                            <span>iPhone, Tablets</span></a>
                                        </li>
                                        <li><a href="#">
                                            <span class="tag mr-10">Tags:</span>
                                            <span>Smartphone, Tablets</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->

    </main>

    <!-- footer-start -->
    <footer>
        <div class="fotter-area d-ddark-bg">
            <div class="footer__top pt-60 pb-10">
                <div class="container 0">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-8">
                            <div class="footer__widget">
                                <div class="footer__widget-title mb-20">
                                    <h4>About The Store</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <p class="footer-text mb-25">Our mission statement is to provide the absolute best customer experience available in the Electronic industry without exception.</p>
                                    <div class="footer__hotline d-flex align-items-center mb-10">
                                        <div class="icon icon-2 mr-15">
                                            <i class="fal fa-headset"></i>
                                        </div>
                                        <div class="text text-2">
                                            <h4>Got Question? Call us 24/7!</h4>
                                            <span><a href="tel:100-123-456-7890">(+100) 123 456 7890</a></span>
                                        </div>
                                    </div>
                                    <div class="footer__info">
                                        <ul>
                                            <li>
                                                <span>Add:  <a target="_blank" href="https://goo.gl/maps/c82DDZ8ALvL878Bv8">Walls Street 68, Mahattan, New York, USA</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer__widget footer-col-2">
                                <div class="footer__widget-title">
                                    <h4>My Account</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__link footer__link-2">
                                        <ul>
                                            <li><a href="contact.html">Product Support</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="faq.html">Terms &amp; Conditions &amp;</a></li>
                                            <li><a href="faq.html">Redeem Voucher</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer__widget footer-col-2">
                                <div class="footer__widget-title">
                                    <h4>Customer Care</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__link footer__link-2">
                                        <ul>
                                            <li><a href="faq.html">New Customers</a></li>
                                            <li><a href="faq.html">How to use Account</a></li>
                                            <li><a href="faq.html">Placing an Order</a></li>
                                            <li><a href="faq.html">Payment Methods</a></li>
                                            <li><a href="faq.html">Delivery &amp; Dispatch</a></li>
                                            <li><a href="faq.html">Problems with Order</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer__widget footer-col-2">
                                <div class="footer__widget-title">
                                    <h4>Customer Service</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__link footer__link-2">
                                        <ul>
                                            <li><a href="faq.html">Help Center</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="faq.html">Report Abuse</a></li>
                                            <li><a href="faq.html">Submit a Dispute</a></li>
                                            <li><a href="faq.html">Policies &amp; Rules</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6">
                            <div class="footer__widget">
                                <div class="footer__widget-title mb-20">
                                    <h4>Sign Up To Newsletter</h4>
                                </div>
                                <div class="footer__widget-content">
                                    <p class="footer-text mb-25">Join 60.000+ subscribers and get a new discount coupon  on every Saturday.</p>
                                    <div class="footer__newsletter-form">
                                        <form action="#">
                                            <input class="ft-newsl b-radius" type="email" placeholder="Enter your email ...">
                                            <button class="ft-newsl-btn" type="submit">subscribe</button>
                                        </form>
                                        </div>
                                    <p class="provide-text mt-20">By providing your email address, you agree to our <br> <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom-2">
                <div class="container 0">
                    <div class="footer__bottom-content footer__bottom-content-2 pt-50 pb-50">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer__links footer__links-d text-center mb-25">
                                    <p>
                                        <a href="about.html">About Us</a>
                                        <a href="contact.html">Delivery & Return</a>
                                        <a href="faq.html">Privacy Policy</a>
                                        <a href="faq.html">Help</a>
                                        <a href="faq.html">Order Tracking</a>
                                        <a href="contact.html">Contact Us</a>
                                        <a href="faq.html">FAQs </a>
                                    </p>
                                </div>
                                <div class="payment-image text-center mb-25">
                                    <a href="#"><img src="https://suguba.store/assets/duka-market/img/payment/payment.png" alt=""></a>
                                </div>
                                <div class="copy-right-area copy-right-area-2 text-center">
                                    <p>Copyright © <span>DukaMarket.</span> All Rights Reserved. Powered by <a href="#"><span class="main-color">Theme_Pure.</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

      <!-- JS here -->
      <script src="https://suguba.store/assets/duka-market/js/vendor/jquery.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/vendor/waypoints.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/bootstrap-bundle.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/meanmenu.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/swiper-bundle.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/owl-carousel.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/tweenmax.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/magnific-popup.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/parallax.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/backtotop.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/nice-select.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/countdown.min.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/counterup.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/wow.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/isotope-pkgd.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/imagesloaded-pkgd.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/ajax-form.js"></script>
      <script src="https://suguba.store/assets/duka-market/js/main.js"></script>
   <script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.setHideEmptyTabs(false);
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelQueriesWidget()}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addTab("livewire", new PhpDebugBar.DebugBar.Tab({"icon":"bolt","title":"Livewire", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"models": ["models.data", {}],
"models:badge": ["models.count", 0],
"livewire": ["livewire.data", {}],
"livewire:badge": ["livewire.count", 0],
"emails": ["symfonymailer_mails.mails", []],
"emails:badge": ["symfonymailer_mails.count", null],
"gate": ["gate.messages", []],
"gate:badge": ["gate.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.enableAjaxHandlerTab();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"https:\/\/suguba.store\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"X3a7db42f310dbfd551be0d8d5ead81fa","datetime":"2025-02-27 13:25:39","utime":1740662739.009527,"method":"GET","uri":"\/","ip":"197.15.254.209"},"php":{"version":"8.3.15","interface":"fpm-fcgi"},"messages":{"count":0,"messages":[]},"time":{"start":1740662738.882016,"end":1740662739.009551,"duration":0.12753510475158691,"duration_str":"128ms","measures":[{"label":"Booting","start":1740662738.882016,"relative_start":0,"end":1740662738.963869,"relative_end":1740662738.963869,"duration":0.08185315132141113,"duration_str":"81.85ms","memory":0,"memory_str":"0B","params":[],"collector":"time"},{"label":"Application","start":1740662738.963885,"relative_start":0.08186912536621094,"end":1740662739.009554,"relative_end":2.86102294921875e-6,"duration":0.045668840408325195,"duration_str":"45.67ms","memory":0,"memory_str":"0B","params":[],"collector":"time"}]},"memory":{"peak_usage":4032920,"peak_usage_str":"4MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":1,"templates":[{"name":"\/srv\/users\/glaxuss\/www\/suguba.store\/resources\/views\/pages\/index.blade.php","param_count":null,"params":[],"start":1740662738.998902,"type":"blade","hash":"blade\/srv\/users\/glaxuss\/www\/suguba.store\/resources\/views\/pages\/index.blade.php\/srv\/users\/glaxuss\/www\/suguba.store\/resources\/views\/pages\/index.blade.php","xdebug_link":{"url":"phpstorm:\/\/open?file=%2Fsrv%2Fusers%2Fglaxuss%2Fwww%2Fsuguba.store%2Fresources%2Fviews%2Fpages%2Findex.blade.php\u0026line=1","ajax":false,"filename":"index.blade.php","line":"?"}}]},"route":{"uri":"GET {fallbackPlaceholder}","uses":"Closure(Request $request) {#2236\n  class: \u0022Laravel\\Folio\\FolioManager\u0022\n  this: Laravel\\Folio\\FolioManager {#2233 \u2026}\n  file: \u0022\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/folio\/src\/FolioManager.php\u0022\n  line: \u002282 to 94\u0022\n}","as":"laravel-folio","file":"\u003Ca href=\u0022phpstorm:\/\/open?file=%2Fsrv%2Fusers%2Fglaxuss%2Fwww%2Fsuguba.store%2Fvendor%2Flaravel%2Ffolio%2Fsrc%2FFolioManager.php\u0026line=82\u0022 onclick=\u0022\u0022\u003Evendor\/laravel\/folio\/src\/FolioManager.php:82-94\u003C\/a\u003E"},"queries":{"nb_statements":2,"nb_visible_statements":2,"nb_excluded_statements":0,"nb_failed_statements":0,"accumulated_duration":0.0329,"accumulated_duration_str":"32.9ms","memory_usage":0,"memory_usage_str":null,"statements":[{"sql":"select * from \u0022sessions\u0022 where \u0022id\u0022 = \u0027hOv4nMV6ZbslPgc5ostvISFV7dDP4DVKZeNkiWf3\u0027 limit 1","type":"query","params":[],"bindings":["hOv4nMV6ZbslPgc5ostvISFV7dDP4DVKZeNkiWf3"],"hints":null,"show_copy":true,"backtrace":[{"index":15,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":97},{"index":16,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":113},{"index":17,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":101},{"index":18,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":85},{"index":19,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","line":147}],"start":1740662738.96966,"duration":0.02801,"duration_str":"28.01ms","memory":0,"memory_str":null,"filename":"DatabaseSessionHandler.php:97","source":{"index":15,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":97},"xdebug_link":{"url":"phpstorm:\/\/open?file=%2Fsrv%2Fusers%2Fglaxuss%2Fwww%2Fsuguba.store%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FSession%2FDatabaseSessionHandler.php\u0026line=97","ajax":false,"filename":"DatabaseSessionHandler.php","line":"97"},"connection":"suguba","explain":null,"start_percent":0,"width_percent":85.137},{"sql":"update \u0022sessions\u0022 set \u0022payload\u0022 = \u0027YTozOntzOjY6Il90b2tlbiI7czo0MDoiamZic3hiRVk1cVB2aFExRndXUlUwM2JnSU5rWmVteHFmenJZOWp3SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vc3VndWJhLnN0b3JlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==\u0027, \u0022last_activity\u0022 = 1740662738, \u0022user_id\u0022 = null, \u0022ip_address\u0022 = \u0027197.15.254.209\u0027, \u0022user_agent\u0022 = \u0027Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/133.0.0.0 Safari\/537.36\u0027 where \u0022id\u0022 = \u0027hOv4nMV6ZbslPgc5ostvISFV7dDP4DVKZeNkiWf3\u0027","type":"query","params":[],"bindings":["YTozOntzOjY6Il90b2tlbiI7czo0MDoiamZic3hiRVk1cVB2aFExRndXUlUwM2JnSU5rWmVteHFmenJZOWp3SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHBzOi8vc3VndWJhLnN0b3JlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==",1740662738,null,"197.15.254.209","Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/133.0.0.0 Safari\/537.36","hOv4nMV6ZbslPgc5ostvISFV7dDP4DVKZeNkiWf3"],"hints":null,"show_copy":true,"backtrace":[{"index":11,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":173},{"index":12,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":140},{"index":13,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":172},{"index":14,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","line":245},{"index":15,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","line":130}],"start":1740662739.003034,"duration":0.004889999999999999,"duration_str":"4.89ms","memory":0,"memory_str":null,"filename":"DatabaseSessionHandler.php:173","source":{"index":11,"namespace":null,"name":"vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","file":"\/srv\/users\/glaxuss\/www\/suguba.store\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":173},"xdebug_link":{"url":"phpstorm:\/\/open?file=%2Fsrv%2Fusers%2Fglaxuss%2Fwww%2Fsuguba.store%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FSession%2FDatabaseSessionHandler.php\u0026line=173","ajax":false,"filename":"DatabaseSessionHandler.php","line":"173"},"connection":"suguba","explain":null,"start_percent":85.137,"width_percent":14.863}]},"models":{"data":[],"count":0,"is_counter":true},"livewire":{"data":[],"count":0},"symfonymailer_mails":{"count":0,"mails":[]},"gate":{"count":0,"messages":[]},"session":{"_token":"jfbsxbEY5qPvhQ1FwWRU03bgINkZemxqfzrY9jwJ","_previous":"array:1 [\n  \u0022url\u0022 =\u003E \u0022https:\/\/suguba.store\u0022\n]","_flash":"array:2 [\n  \u0022old\u0022 =\u003E []\n  \u0022new\u0022 =\u003E []\n]"},"request":{"path_info":"\/","status_code":"\u003Cpre class=sf-dump id=sf-dump-42152594 data-indent-pad=\u0022  \u0022\u003E\u003Cspan class=sf-dump-num\u003E200\u003C\/span\u003E\n\u003C\/pre\u003E\u003Cscript\u003ESfdump(\u0022sf-dump-42152594\u0022, {\u0022maxDepth\u0022:0})\u003C\/script\u003E\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"\u003Cpre class=sf-dump id=sf-dump-1750706632 data-indent-pad=\u0022  \u0022\u003E[]\n\u003C\/pre\u003E\u003Cscript\u003ESfdump(\u0022sf-dump-1750706632\u0022, {\u0022maxDepth\u0022:0})\u003C\/script\u003E\n","request_request":"\u003Cpre class=sf-dump id=sf-dump-1832718260 data-indent-pad=\u0022  \u0022\u003E[]\n\u003C\/pre\u003E\u003Cscript\u003ESfdump(\u0022sf-dump-1832718260\u0022, {\u0022maxDepth\u0022:0})\u003C\/script\u003E\n","request_headers":"\u003Cpre class=sf-dump id=sf-dump-568365375 data-indent-pad=\u0022  \u0022\u003E\u003Cspan class=sf-dump-note\u003Earray:20\u003C\/span\u003E [\u003Csamp data-depth=1 class=sf-dump-expanded\u003E\n  \u0022\u003Cspan class=sf-dump-key\u003Eaccept\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002296 characters\u0022\u003Etext\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Ex-forwarded-proto\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u00225 characters\u0022\u003Ehttps\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-gpc\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str\u003E1\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-fetch-user\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u00222 characters\u0022\u003E?1\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-ch-ua-mobile\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u00222 characters\u0022\u003E?0\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Eupgrade-insecure-requests\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str\u003E1\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Ehost\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002212 characters\u0022\u003Esuguba.store\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Epriority\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u00226 characters\u0022\u003Eu=0, i\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Ecookie\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u0022712 characters\u0022\u003EXSRF-TOKEN=eyJpdiI6IlNURWQ1TlRMR09tT1RCNWxmU2Y2TWc9PSIsInZhbHVlIjoicXZ1MW1oODNMMVpEa212OTBNcFZpRHpGN0RQS0M4YkNyRTF4L1BVTmJNbHdwZlFaRkQ0OEdteTlLL3k1NWdxMXZyU1NLWnUwQTI2VFZOOWg1dDNyeUoxMXhuUkdud1YwRmxBOFE0OWlyaFZodEhzU2R3cHlJTXJ4R0QyQkdlWm4iLCJtYWMiOiI2NjQ4ZWQwOWIzZjJmZGU2ZWY1YzJmZDE1ZDM3YjI1ODdkODRjNTcxNTM5MzI2YmM3NzBhZjE3NDE0YmNlMjMwIiwidGFnIjoiIn0%3D; suguba_session=eyJpdiI6IlVOTWtmRVR1dlN1VlVrMnJPNVpvK2c9PSIsInZhbHVlIjoiVmtqQXBoVFUxMUc0VlJvVGtpTkphNHM3MXcvUHR4dW5pUEc4YWt3RDhrK1BTeW8rZWpkbnkrU2FueU1NTkZFamxNMVhNNEdHTkVjYWp3QmVJSXZ1eEZVc2FTcGpvaHdlbGlxdG9UMVoyeU5Wak1tbE9FbTlMYmpFam5qcnU0Uy8iLCJtYWMiOiI2MzNjMjJmOTRhZGRjNDY0MjBjOTBkYzJlNTg5ZTEyMTdjMjViMmI1YzI3MmRmOTQ3YzA4NDg5OGI5NjkzZmUyIiwidGFnIjoiIn0%3D\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Eaccept-encoding\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002223 characters\u0022\u003Egzip, deflate, br, zstd\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Euser-agent\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u0022111 characters\u0022\u003EMozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/133.0.0.0 Safari\/537.36\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-fetch-dest\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u00228 characters\u0022\u003Edocument\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Econtent-length\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str\u003E0\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Ex-forwarded-for\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002214 characters\u0022\u003E197.15.254.209\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-fetch-site\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002210 characters\u0022\u003Ecross-site\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-ch-ua\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002257 characters\u0022\u003E\u0026quot;Not(A:Brand\u0026quot;;v=\u0026quot;99\u0026quot;, \u0026quot;Brave\u0026quot;;v=\u0026quot;133\u0026quot;, \u0026quot;Chromium\u0026quot;;v=\u0026quot;133\u0026quot;\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Ex-forwarded-host\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002212 characters\u0022\u003Esuguba.store\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-fetch-mode\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u00228 characters\u0022\u003Enavigate\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Eaccept-language\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002214 characters\u0022\u003Efr-FR,fr;q=0.8\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Esec-ch-ua-platform\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u00229 characters\u0022\u003E\u0026quot;Windows\u0026quot;\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n\u003C\/samp\u003E]\n\u003C\/pre\u003E\u003Cscript\u003ESfdump(\u0022sf-dump-568365375\u0022, {\u0022maxDepth\u0022:0})\u003C\/script\u003E\n","request_cookies":"\u003Cpre class=sf-dump id=sf-dump-1509410810 data-indent-pad=\u0022  \u0022\u003E\u003Cspan class=sf-dump-note\u003Earray:2\u003C\/span\u003E [\u003Csamp data-depth=1 class=sf-dump-expanded\u003E\n  \u0022\u003Cspan class=sf-dump-key\u003EXSRF-TOKEN\u003C\/span\u003E\u0022 =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002240 characters\u0022\u003EjfbsxbEY5qPvhQ1FwWRU03bgINkZemxqfzrY9jwJ\u003C\/span\u003E\u0022\n  \u0022\u003Cspan class=sf-dump-key\u003Esuguba_session\u003C\/span\u003E\u0022 =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002240 characters\u0022\u003EhOv4nMV6ZbslPgc5ostvISFV7dDP4DVKZeNkiWf3\u003C\/span\u003E\u0022\n\u003C\/samp\u003E]\n\u003C\/pre\u003E\u003Cscript\u003ESfdump(\u0022sf-dump-1509410810\u0022, {\u0022maxDepth\u0022:0})\u003C\/script\u003E\n","response_headers":"\u003Cpre class=sf-dump id=sf-dump-529283200 data-indent-pad=\u0022  \u0022\u003E\u003Cspan class=sf-dump-note\u003Earray:5\u003C\/span\u003E [\u003Csamp data-depth=1 class=sf-dump-expanded\u003E\n  \u0022\u003Cspan class=sf-dump-key\u003Econtent-type\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002224 characters\u0022\u003Etext\/html; charset=UTF-8\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Ecache-control\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002217 characters\u0022\u003Eno-cache, private\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Edate\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002229 characters\u0022\u003EThu, 27 Feb 2025 13:25:38 GMT\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003Eset-cookie\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:2\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u0022436 characters\u0022\u003EXSRF-TOKEN=eyJpdiI6Ik1ia0JKV2E4blpqWncreUZ4cnZXd2c9PSIsInZhbHVlIjoidFR4ckw3bC9TR0VXVXJ6QW1XUWdlaTJBRmxHZk1rWTNBV0JQWUw1SWs4d3grRmN6NGs1ekN6UlgzRExZNnQyVGFkV1dudFowSVEvK21vWWNJaHJBU05KR3o1aDhwSEVRVnpkZTRNM3ZoT2ZaMytRV2wwQ29hU0s0eEhnbFR1djQiLCJtYWMiOiI0ZjQ5YjIxZTA1YTVhMGRiNWZlMDc0ZjEwZDdmM2FiMWU1N2ViYTM0ODc0OTYwZWI3N2VlZGU4NWJjNDMwYjg4IiwidGFnIjoiIn0%3D; expires=Thu, 27 Feb 2025 15:25:38 GMT; Max-Age=7199; path=\/; secure; samesite=lax\u003C\/span\u003E\u0022\n    \u003Cspan class=sf-dump-index\u003E1\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u0022450 characters\u0022\u003Esuguba_session=eyJpdiI6IjBsMmJVWkhxTE5HQ1E4bFBZaE42aEE9PSIsInZhbHVlIjoiT1Q3U0pyaHdkTnJRYlZWek5sTlVpZ2VIQVNtbHdBMHg1VHZqcUl0Znh4TXpoQjBWcUZYdW9zZmdUOStZZDVZblVxRmZFM3ZJdDZDWTk0NzFhV3RrSlYvTnRFV0s1aFlDUGFzckl3Mm5oaGdaZy81Um11bmw5NEJhcVNRTlFQLzYiLCJtYWMiOiI1NjcwNGY1MDExY2U5YjFlNDBhZmZlNzJmMzc5MDZjMzEyMjUyZmM0NzEwMjkzYzliN2RiZTI1OWFjMWIzNWUwIiwidGFnIjoiIn0%3D; expires=Thu, 27 Feb 2025 15:25:38 GMT; Max-Age=7199; path=\/; secure; httponly; samesite=lax\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003ESet-Cookie\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:2\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u003Cspan class=sf-dump-index\u003E0\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u0022408 characters\u0022\u003EXSRF-TOKEN=eyJpdiI6Ik1ia0JKV2E4blpqWncreUZ4cnZXd2c9PSIsInZhbHVlIjoidFR4ckw3bC9TR0VXVXJ6QW1XUWdlaTJBRmxHZk1rWTNBV0JQWUw1SWs4d3grRmN6NGs1ekN6UlgzRExZNnQyVGFkV1dudFowSVEvK21vWWNJaHJBU05KR3o1aDhwSEVRVnpkZTRNM3ZoT2ZaMytRV2wwQ29hU0s0eEhnbFR1djQiLCJtYWMiOiI0ZjQ5YjIxZTA1YTVhMGRiNWZlMDc0ZjEwZDdmM2FiMWU1N2ViYTM0ODc0OTYwZWI3N2VlZGU4NWJjNDMwYjg4IiwidGFnIjoiIn0%3D; expires=Thu, 27-Feb-2025 15:25:38 GMT; path=\/; secure\u003C\/span\u003E\u0022\n    \u003Cspan class=sf-dump-index\u003E1\u003C\/span\u003E =\u003E \u0022\u003Cspan class=sf-dump-str title=\u0022422 characters\u0022\u003Esuguba_session=eyJpdiI6IjBsMmJVWkhxTE5HQ1E4bFBZaE42aEE9PSIsInZhbHVlIjoiT1Q3U0pyaHdkTnJRYlZWek5sTlVpZ2VIQVNtbHdBMHg1VHZqcUl0Znh4TXpoQjBWcUZYdW9zZmdUOStZZDVZblVxRmZFM3ZJdDZDWTk0NzFhV3RrSlYvTnRFV0s1aFlDUGFzckl3Mm5oaGdaZy81Um11bmw5NEJhcVNRTlFQLzYiLCJtYWMiOiI1NjcwNGY1MDExY2U5YjFlNDBhZmZlNzJmMzc5MDZjMzEyMjUyZmM0NzEwMjkzYzliN2RiZTI1OWFjMWIzNWUwIiwidGFnIjoiIn0%3D; expires=Thu, 27-Feb-2025 15:25:38 GMT; path=\/; secure; httponly\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n\u003C\/samp\u003E]\n\u003C\/pre\u003E\u003Cscript\u003ESfdump(\u0022sf-dump-529283200\u0022, {\u0022maxDepth\u0022:0})\u003C\/script\u003E\n","session_attributes":"\u003Cpre class=sf-dump id=sf-dump-312581381 data-indent-pad=\u0022  \u0022\u003E\u003Cspan class=sf-dump-note\u003Earray:3\u003C\/span\u003E [\u003Csamp data-depth=1 class=sf-dump-expanded\u003E\n  \u0022\u003Cspan class=sf-dump-key\u003E_token\u003C\/span\u003E\u0022 =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002240 characters\u0022\u003EjfbsxbEY5qPvhQ1FwWRU03bgINkZemxqfzrY9jwJ\u003C\/span\u003E\u0022\n  \u0022\u003Cspan class=sf-dump-key\u003E_previous\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:1\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u0022\u003Cspan class=sf-dump-key\u003Eurl\u003C\/span\u003E\u0022 =\u003E \u0022\u003Cspan class=sf-dump-str title=\u002220 characters\u0022\u003Ehttps:\/\/suguba.store\u003C\/span\u003E\u0022\n  \u003C\/samp\u003E]\n  \u0022\u003Cspan class=sf-dump-key\u003E_flash\u003C\/span\u003E\u0022 =\u003E \u003Cspan class=sf-dump-note\u003Earray:2\u003C\/span\u003E [\u003Csamp data-depth=2 class=sf-dump-compact\u003E\n    \u0022\u003Cspan class=sf-dump-key\u003Eold\u003C\/span\u003E\u0022 =\u003E []\n    \u0022\u003Cspan class=sf-dump-key\u003Enew\u003C\/span\u003E\u0022 =\u003E []\n  \u003C\/samp\u003E]\n\u003C\/samp\u003E]\n\u003C\/pre\u003E\u003Cscript\u003ESfdump(\u0022sf-dump-312581381\u0022, {\u0022maxDepth\u0022:0})\u003C\/script\u003E\n"}}, "X3a7db42f310dbfd551be0d8d5ead81fa");

</script>
</body>
</html>

# Goal : 
Test if possible to displace a component in another div of the page

# Problem : 
Site is using Contact Form 7 on Wordpress and uses a dedicated "page" for its Privacy policy
Easy to get the PP content on the form page but not in a convenient place.

So Flow is 
1. load form
2. load PP from its dedicated page
3. displace the PP content to a more convenient place.

# Solution:
1. place div destination
2. import the Privacy Policy in a dedicated div
3. Add the following code above the body tag

        <script>
            var pp = document.querySelector("#pp_content");
            document.querySelector("#pp_destination").innerHTML = pp.innerHTML;
            pp.parentNode.removeChild(pp);
        </script>
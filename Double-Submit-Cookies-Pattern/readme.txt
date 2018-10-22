Double Submit Cookie : 
If maintaining the state for CSRF token at server side is problematic, an alternative defense is to use the double submit cookie technique. This technique is easy to implement and is stateless. In this technique, we send a random value in both a cookie and as a request parameter, with the server verifying if the cookie value and request value match. When a user visits (even before authenticating to 
prevent login CSRF), the site should generate a (cryptographically strong) pseudorandom value and set it as a cookie on the user's machine separate from the 
session identifier. The site then requires that every transaction request include this pseudorandom value as a hidden form value (or other request 
parameter/header). If both of them match at server side, the server accepts it as legitimate request and if they don’t, it would reject the request.

There’s a belief that this technique would work because a cross origin attacker cannot read any data sent from the server or modify cookie values, per the 
same-origin policy. This means that while an attacker can force a victim to send any value with a malicious CSRF request, the attacker will be unable to 
modify or read the value stored in the cookie (with which the server compares the token value). 

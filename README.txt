
A best practices implementation of OAuth for Drupal.  

What is OAuth?

"An open protocol to allow secure API authentication in a simple and
standard method from desktop and web applications."

If you've ever used Flickr to connect with other systems, or added a
Facebook app that asks you what permissions you want to give, both are
examples of securely identifying yourself between systems without you
physically having to enter a password every time.

A very simplistic explanation is that OpenID is like your car key: you
have to be at the web page / service to log in.

OAuth is like a valet key, that you can hand to a website to operate
on your behalf, even when you're not there.

  * Community Site: http://oauth.net/
  * Wikipedia entry: http://en.wikipedia.org/wiki/OAuth
  * Specification: http://oauth.net/core/1.0/
  * Discussion Group: http://groups.google.com/group/oauth
  * PHP Library by Andy Smith (termie): http://code.google.com/p/oauth/

TO DO

1. allow OAuth between two Drupal sites
  a) have the token be passed etc.
  b) some small "thing" that can be done remotely and is non-trivial
  and has few if any dependiences (i.e. core D6 + Oauth on both sides)
  -- probably something with profile.module or username

2. Enable OAuth with some 3rd party system
  a) choose a particular service -- my recommendation is Magnolia --
  http://wiki.ma.gnolia.com/OAuth
  b) implement some small thing -- maybe the beginnings of a magnolia module

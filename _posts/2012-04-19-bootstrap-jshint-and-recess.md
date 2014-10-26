---
layout: post
title: Bootstrap, JSHint, and Recess
---

This last week we've added two new developer tools to the Bootstrap tool chain and I wanted to take a minute to let you know a little bit more about what they are, why we've added them, and why it matters.

### [JSHint](http://www.jshint.com)

JSHint is an awesome community-driven linting tool, used to detect errors and potential problems in your JS, and to enforce coding conventions. It's super flexible and can easily adapt to whichever coding guidelines and environment you expect your code to execute in.

As of 2.0.3, all JS (including tests) will be run through JSHint as a part of the build process.
We're hoping that this will both catch potentially unsafe syntax as well as encourage a convention around Bootstap's JavaScript style.

To begin with, Bootstrap's JS will use the following options (stored in a .jshintrc file in the js dir):

{% highlight json %}
{
    "validthis" : true
  , "laxcomma"  : true
  , "laxbreak"  : true
  , "browser"   : true
  , "boss"      : true
  , "expr"      : true
  , "asi"       : true
}
{% endhighlight %}

We hope this will make it a little easier for those looking to contribute to Bootstrap, and lessen the pain around pull requests with divergent styles. If you haven't played with JSHint, you should definitely take a moment to <a href="http://www.jshint.com/">check it out right now</a>!

### [Recess](http://twitter.github.io/recess/)

Recess is a project developed at Twitter to help support our internal style guide.

![Recess screenshot](http://f.cl.ly/items/3R2v3e1G2P2S0y020j1D/Screen%20Shot%202012-04-19%20at%2012.57.15%20PM.png)

At it’s core, Recess is a linter, but with the added ability to compile and/or reformat your css/less files: normalizing whitespace, stripping 0 values, reordering properties, and any other safe stylistic optimizations it can find.

What this means is that instead of just telling you where you have problems, you can actually tell Recess to just go ahead and tidy your code up for you.

To begin with, we're only using Recess in this manner — as a compiler for our Less (rather than the lessc compiler directly). This gives us strict control over the output of Bootstrap and let's Mark and I really geekout, which we're super excited about (we like things to be perfect... we're nerds like that).


### [The Future](http://i.imgur.com/LnriU.gif)

Eventually we'd like to try to roll these tools (along with our unit tests) into some sort of continuous integration service. At Twitter, we're already using travis-ci on a number of our other projects (Hogan.js, Recess), so we may follow suit with Bootstrap soon. This will make it even easier for us to accept pull requests from the community, as we'll be able to see all our tests passing! :)

Anyways — that's all for now. As always, if you have any questions or feedback, let us know! thanks!

<3

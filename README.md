Long live the script - it lasted 2 weeks.


Jokes aside I started creating cookies for my website to manage GDPR preferences.

I thought it would work great, and with this script in my GDPR popup menu that would let you fiddle switches... it was great!

The script automatically grabbed each switch as soon as the page loaded, applied to them their own customized function and all!

Then I realized that it was shooting down my CSP scores because the cookies, that would be used by both PHP and Javascript, couldn't be put in HttpOnly.

So I had two options:
-Keep it that way and lose 5% rating on the website audit
-Ditch it.

I ditched it.

More than that, I ditched "custom" cookies all together, all PHPSession now bitches!
I basically recoded the entire handling and loading of pages and scripts, and the storage/loading/setting of GDPR preferences.

But does that mean the cookies won't work anymore? NO, they BOTH work now, I went the extent of making it toggleable!!
All that so it would ALL rely only on PHPSession and forms instead, meanwhile I was unable to let go of my previous work.

So... that script still exists on the website.
But isn't ever loaded because, in the backend, there is a $gdprsettingtype = '2'; instead of a $gdprsettingtype = '1'; in one of the internal php files.


So unless something goes very wrong and I need a fall back method, it won't ever be active again till the day it will be deleted. 

So I'm leaving it here for posterity!
I'm not offering the php code for handling all that internally, but I'm willing to share the popup, with its interface and all, and the cookie-way of doing stuff.

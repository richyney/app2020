Today I tried to add a time stamp and that seems to have messed some of the functionality with the DB. 
I removed it and think it works ok again
I'm sure I'll have it and lots of other parts working before the next due date.

the site opens on /register

I have taken the footer from a website so it's not my code.





Below isn't really important just some issues I took note of along the way

When the LoginController was added, it would not display the page on the localhost. A default meaasge was
displayed saying it was a message coming from that src file and the template file... I think this is the original file that is 
created and somehow it continues to be displayed. After a day and a half of trying to figure it out... changing the name of
the template file works...


There were many other issues that were solved through primarily stackoverflow... This being another example:
https://stackoverflow.com/questions/49212475/composer-require-runs-out-of-memory-php-fatal-error-allowed-memory-size-of-161

I found that the highest rated answer was not always the solution that worked for me and often the most straightforward
solution was down the page a bit.


Another issue was: https://stackoverflow.com/questions/18022809/xampp-mysql-shutdown-unexpectedly

This occured after mysql having worked well for a while... The info in stackoverflow didnt work exactly... but it led me to a solution by deletingg many files from
C:\xampp\mysql\data


But this only worked for a while and every time I restarted my computere I seemed to have some issue such as
https://stackoverflow.com/questions/6342201/bug-1146-table-xxx-xxxxx-doesnt-exist 
                                                                                                                          
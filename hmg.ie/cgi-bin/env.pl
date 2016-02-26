#!/usr/bin/perl

print "Content-type:text/html\n\n";
print <<EndOfHTML;

<html><head><title>Print Env</title></head>
<body>
EndOfHTML
;
foreach $key (sort(keys %ENV)) {
    print "$key = $ENV{$key}<br>\n";
}

print "<body></html>";
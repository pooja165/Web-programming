#Author: Pooja Nanjundaswamy Student ID: W1177463

#!/usr/bin/perl
use strict;
use warnings;
my $totalUsers;
my %final_celltype_no;

#Function openCSVfile - opens cell-phones.csv file if it exists, else displays error message
sub openCSVfile
{
	#Note: this could be a full file path
    my $filename = "cell-phones.csv";
	open(INPUT, $filename) or die "Cannot open $filename";
}

#Function readCSVfile - reads the csv file line by line and calculates the number of users per cell phone type and also the total users surveyed
sub readCSVfile
{
	my $line;
	my %count_data;
	my $institutionName;
	my $cellphoneType;
	my $count;
	
	# Read the lines one by one
    while($line = <INPUT>)
    {
		# Ignore blank lines
		$line =~ /^\s*$/ and next;
		
		# Ignore comment lines
		$line =~ /^#/ and next;
		
        # Just display the valid lines for now.
        #print($line);
		
		($institutionName, $cellphoneType, $count) = split(',', $line);
		
		print $institutionName, $cellphoneType, $count;
		
		$count_data{$cellphoneType} .= $count . " ";
	}
		
	foreach $cellphoneType (sort keys %count_data)
	{ 
		my $total = 0; 
		my @count_data = split (" ", $count_data{$cellphoneType}); 
		foreach $count (@count_data)
		{
			$total += $count; 
		}
		$totalUsers += $total;
		print "\n$cellphoneType: $total";	
		$final_celltype_no{$cellphoneType} = $total;
	}
	
	print "\nTotal Users: $totalUsers\n";		
}

#Function createHTMLfile - creates html file cell-phones_1177463.html with svg element rectangle and text showing a visual model of the above calculated data
sub createHTMLfile
{
	#Creating html output file
	open(my $fh, '>', 'cell-phones_1177463.html') or die "Could not create/write the file cell-phones_1177463.html";

	my $html_1 = 	
	"<!DOCTYPE html>
	<html>
	<head>
	<meta name=viewport content=\"width=device-width, initial-scale=1.0\" />
	<title>Cell-phone Usage</title>
	<meta charset=\"utf-8\" />
	<style>
	.bar {
	  fill: #ff6666; 
	  height: 21px;
	  transition: fill .3s ease;
	  cursor: pointer;
	  font-family: Helvetica, sans-serif;
	}
	.bar text {
	  color: #ff6666;
	}
	.bar:hover,
	.bar:focus {
	  fill: green;
	}
	.bar:hover text,
	.bar:focus text {
	  fill: green;
	}
	</style>
	</head>
	<body style=\"width:100%;height:100%;\">
	<h1>Bar graph showing the cell phone usage by students in various schools</h1>
	<h2>Number of students surveyed = ".$totalUsers." </h2>
	<svg viewBox=\"0 0 1000 1000\" height=\"100%\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" style=\"background-color:black\">";
	
	#Writing to the html output file
	print $fh $html_1."\n";
	
	my $width;
	my $y=0;
	my @hash_keys = keys %final_celltype_no;
	my @hash_values = values %final_celltype_no;
	
	#Representing each cell phone type by a rectangle where height is fixed and width = noOfUsers*0.75
	for (my $i=0; $i < @hash_keys; $i++) 
	{	
		$width = $hash_values[$i];
		#print $hash_keys[$i]."=".$width."\n";
		print $fh "<g class=\"bar\">\n";
		print $fh "<rect width=\"".($width*0.75)."\" height=\"19\" y=\"".$y."\"></rect>\n";
		print $fh "<text x=\"".(($width*0.75)+5)."\" y=\"".($y+10)."\" dy=\".35em\">".$width." ".$hash_keys[$i]."</text>\n";
		print $fh "</g>"."\n";	
		$y = $y + 20;
	}
	
	my $html_2 = "</svg>
	</body>
	</html>";
	print $fh $html_2;

	#Closing the html output file
	close $fh;
}

#Function closeCSVfile - closes the csv file after calculating required data
sub closeCSVfile
{
	close(INPUT);
}

#Function main - calls each sub function sequentially needed to perform the necessary operations
sub main 
{	
	openCSVfile();
	readCSVfile();
	closeCSVfile(); 
	createHTMLfile();
}

#Execution of the perl program starts here
main();


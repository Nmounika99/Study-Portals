<?php
	system("clear");
	//if user is valid as soon as user enters to welcome page of Sugar CRM 
	echo " *************************** \033[31;47m Welcome to Sugar CRM \033[0m *****************************\n";
	echo "\033[32m Press e to go to Main Menu  \033[0m"	;
	$stdin = fopen("php://stdin","r");
	//fgetc is to read single character from the input
	$line = fgetc(STDIN);
	if(trim($line) != 'e')
	{	//this condition is to exit from the program
		echo " ABORTING! \n"; 
		exit;
    }
	else
	{
		echo "\n"; 
		mainMenu();
	} 
	
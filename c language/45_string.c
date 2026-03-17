/*write a program to count numbers of character without spacing*/
#include<stdio.h>
void main()
{
    char str[100];
    int i,count=0;
    printf("enter a string:");
    gets(str);
    for(i=0;str[i]!='\0';i++)
    {
        if(str[i]!=' ')
        {
            count++;
        }
    }
    printf("total characters without space=%d",count);
}
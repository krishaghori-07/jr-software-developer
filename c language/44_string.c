/*write a program to count the vowels and words in string*/
#include<stdio.h>
void main()
{
    char str[100];
    int i,vowels=0,words=1;
    printf("enter sentence:");
    gets(str);
    for(i=0;str[i]!='\0';i++)
    {
        if(str[i]=='a'||str[i]=='e'||str[i]=='i'||str[i]=='o'||str[i]=='u'||str[i]=='A'||str[i]=='E'||str[i]=='I'||str[i]=='O'||str[i]=='U')
        {
            vowels++;
        }
        if(str[i]==' ')
        {
            words++;
        }
    }
    printf("number of vowels:%d\n",vowels);
    printf("number of words:%d\n",words);
}
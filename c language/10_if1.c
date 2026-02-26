/*write a program to find the cube of given positive number.
variable cube,number
take input from user.
if (condition)
{
number=0-number;
printf("your number is negative so converted into positive...")
}
cube=number*number*number.
print the cube.
*/
#include<stdio.h>
void main()
{
    int cube,number;
    printf("enter number:");
    scanf("%d",&number);
    if(number<0)
    {
        number=0-number;
       printf("your number is negative so coverted into positive.");
    }
    cube=number*number*number;
    printf("cube is:%d",cube);
}
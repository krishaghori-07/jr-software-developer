#include<stdio.h>
union citizen
{
    char passport[8];
    char rationcard[10];
};
struct person
{
    char name[33];
    int age;
    float weight;
    char isindian;
    union citizen status;
};
void main()
{
    struct person s1;
    printf("enter name:");
    gets(s1.name);
    fflush(stdin);
    printf("enter weight:");
    scanf("%f",&s1.weight);
    printf("enter age:");
    scanf("%d",&s1.age);
    fflush(stdin);
    printf("is this person is(t=true,f=false)");
    scanf("%c",&s1.isindian);
    fflush(stdin);
    if(s1.isindian=='t'||s1.isindian=='T')
    {
        printf("what is your ration card number");
        gets(s1.status.rationcard);
    }
    else
    {
        printf("what is your passport number");
        gets(s1.status.passport);
    }
    printf("name=%s\n weight=%.2f\n  age=%d\n isindian=%c",s1.name,s1.weight,s1.age,s1.isindian);
      if(s1.isindian=='t'||s1.isindian=='T')
    {
       printf("\n ration card no=%s",s1.status.rationcard);
    }
    else
    {
        printf("\n passport number=%s",s1.status.passport);
    }
}



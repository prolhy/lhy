public class Solution
{
  public int Add(int num1,int num2)
    {
        if(num2==0)
        {
          return num1;
        }
        if(num1==0)
        {
        return num2;
        }
    }
}
public int Add(int num1,int num2)
{
   while(num2!=0)
    {
       int sum=num1^num2;
       sum1=(sum1&sum2)<=1;
       num1=sum;
    }
  return num1;
}
package 大数据G226_03;
import java.util.Scanner;
public class Item11_1_2 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int i,sum,a;
		Scanner in1=new Scanner(System.in);
		System.out.println("请输入一个大于1的数：");
		a=in1.nextInt();
		sum=0;
		  for(i=1;i<=a;i++)
		  {
			  if(i%4==0&i%3!=0)
			  {
				  System.out.println(i);
				  sum+=i;
			  }
		  }
		  System.out.print("sum="+sum);

	}

}

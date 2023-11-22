package chapter2_7;
// 5以内的奇数乘积
public class Example2_14_5for {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int sum=1;
		for(int i=1;i<=5;i++)
		{
			if (i%2!=0) sum*=i;
		}
		System.out.println("1*3*5…的值为："+sum);
	}

}

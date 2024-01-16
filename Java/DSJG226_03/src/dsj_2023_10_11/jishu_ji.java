package dsj_2023_10_11;

public class jishu_ji {
//5以内奇数乘积
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int sum=1,i=1;
		do
		{
			if (i%2!=0) sum*=i;
			i++;
		}while(i<=5);
		System.out.println("1*3*5="+sum);
	}

}

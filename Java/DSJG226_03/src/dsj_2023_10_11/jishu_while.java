package dsj_2023_10_11;

public class jishu_while {
//10以内自然数乘积
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int sum=0,i=1;
		while(i<=10)
		{
			if(i%2!=0) sum+=i;
			i++;
		}		
		System.out.println("1+3+5+...="+sum);

	}

}

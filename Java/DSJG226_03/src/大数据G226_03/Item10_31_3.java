package 大数据G226_03;

public class Item10_31_3 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		loop1:for(int i=0;i<5;i++)
		{
			loop2:for(int j=0;j<6;j++)
			{
				if(i==j)
				{
					continue loop1;
				}
				System.out.println("i="+i+" j="+j);
			}
			System.out.println("结束i循环的第"+i+"次循环");
		}
		System.out.println("结束i循环");

	}

}

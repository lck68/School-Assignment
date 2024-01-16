package 大数据G226_03;

public class Item10_31_4 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		for(int i=0;i<3;i++)
		{
			for(int j=0;j<3;j++)
			{
				if(i==j)
				{
					continue;
				}
				System.out.println("i="+i+" j="+j);
			}
			System.out.println("结束i循环的第"+i+"次循环");
		}
		System.out.println("结束i循环");
	}
}

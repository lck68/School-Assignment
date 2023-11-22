package 大数据G226_03;
import java.util.*;
public class Item11_1_1 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int array[]={11,32,3,-4,55};
		int max;
		max=array[0];
		for (int i=0;i<array.length;i++)
		{
			if (max<array[i]) max=array[i];
		}
		System.out.print("最大值是："+max);
	}

}

package 大数据G226_03;

public class Item_11_15_1 {
	public void swapInt(int a,int b){
		int temp;
		temp=a;
		a=b;
		b=temp;
	}
	public void swapString(String a,String b){
		String temp=a;
		a=b;
		b=temp;
	}	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Item_11_15_1 e= new Item_11_15_1();
		int pA=5,pB=9;
		String sA="Hello",sB="World";
		System.out.println("没有调用swapInt方法前：pA="+pA+"，pB="+pB);
		e.swapInt(pA, pB);
		System.out.println("调用swapInt方法后：pA="+pA+"，pB="+pB);
		System.out.println("没有调用swapString方法前：sA="+sA+"，sB="+sB);
		e.swapString(sA, sB);
		System.out.println("调用swapString方法后：sA="+sA+"，sB="+sB);
	}


}

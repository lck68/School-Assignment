package ������G226_03;

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
		System.out.println("û�е���swapInt����ǰ��pA="+pA+"��pB="+pB);
		e.swapInt(pA, pB);
		System.out.println("����swapInt������pA="+pA+"��pB="+pB);
		System.out.println("û�е���swapString����ǰ��sA="+sA+"��sB="+sB);
		e.swapString(sA, sB);
		System.out.println("����swapString������sA="+sA+"��sB="+sB);
	}


}

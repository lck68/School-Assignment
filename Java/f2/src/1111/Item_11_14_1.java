package ������G226_03;

public class Item_11_14_1 {
	public double Area(double r)
	{
		System.out.println("��="+Math.PI);
		return Math.PI*r*r;
	}
	public double Area(double w,double l)
	{
		return w*l;
	}
	public double Area(double a,double b,double c)
	{
		double p=(a+b+c)/2;
		return Math.sqrt(p*(p-a)*(p-b)*(p-c));
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Item_11_14_1 e=new Item_11_14_1();
		System.out.println("���������أ�Area��������������");
		System.out.println("Բ�����Ϊ��"+e.Area(5));
		System.out.println("���ε������"+e.Area(6,8));
		System.out.println("�����ε����Ϊ��"+e.Area(3,4,5));
		System.out.println("��="+Math.PI);
		System.out.println(Math.E);
	}

}

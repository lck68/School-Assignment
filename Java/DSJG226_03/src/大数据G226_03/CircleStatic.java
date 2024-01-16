package ´óÊý¾ÝG226_03;

public class CircleStatic {
	static int x=100,y=200;
	int r;
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		CircleStatic t1=new CircleStatic();
		CircleStatic t2=new CircleStatic();
		t1.x+=100;
		t1.y*=2;
		t1.r=5;
		CircleStatic.x+=200;
		CircleStatic.y-=50;
		t2.r=150;
		System.out.println("x="+CircleStatic.x+",y="+t1.y+",r="+t1.r);
		System.out.println("x="+CircleStatic.x+",y="+t2.y+",r="+t2.r);
		System.out.println("t1.x="+t1.x+",t1.y="+t1.y+",t1.r="+t1.r);
		System.out.println("t2.x="+t2.x+",t2.y="+t2.y+",t2.r="+t2.r);

	}

}

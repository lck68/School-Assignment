package 大数据G226_03;

abstract class Shape51{
	public abstract void draw();
}
class Ellipse51 extends Shape51{
	public void draw(){
		System.out.println("这是一个椭圆形");
	}
}
class Rectangle51 extends Shape51{
	public void draw(){
		System.out.println("这是一个矩形");
	}
}
public class ExAbstract2 {
	public static void main(String[] args) {
		Ellipse51 x1=new Ellipse51();
		Rectangle51 x2=new Rectangle51();
		x1.draw();
		x2.draw();
	}

}

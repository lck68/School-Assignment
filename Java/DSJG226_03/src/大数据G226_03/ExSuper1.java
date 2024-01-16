package 大数据G226_03;

class Animal03{
	String name="猫科";
	void shout(){
		System.out.println(name+"包括猫咪！");
	}
}
class Dog03 extends Animal03{
	String name="犬类";
	void shout(){
		super.shout();
	}
	void printname(){
		System.out.println(name+"和"+super.name+"都属于动物");	
	}
}

public class ExSuper1 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
	}
}
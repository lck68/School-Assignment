package 大数据G226_03;

class Animal2{
	String name="猫咪";
	void shout(){
		System.out.println(this.name+"的叫声是：喵。。。喵！！！");
	}
}
class Cat extends Animal2{
	String name="狗狗";
	void shout(){
		super.shout();
		System.out.println(this.name+"的叫声是：汪汪！！！");
	}
	void print(){
		System.out.println(this.name+"和"+super.name+"都可爱");
	}
}

public class ExSuperThis1 {
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Cat cat=new Cat();
		cat.shout();
		cat.print();
	}
}
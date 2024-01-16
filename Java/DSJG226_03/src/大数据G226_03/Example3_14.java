package 大数据G226_03;

class Fu{
	String name;
	Fu(){
		System.out.println("父类无参构造方法，父类成员变量：name="+name);
	}
	Fu(String n){
		this.name=n;
		System.out.println("父类有参构造方法，父类成员变量：name="+name);
	}
}
class Zi extends Fu{
	Zi(){
		System.out.println("子类无参构造方法，子类成员变量：name="+name);
	}
	Zi(String n){
		super("大伟");
		name=n;
		System.out.println("子类有参构造方法，子类成员变量：name="+name);
	}
}
public abstract class Example3_14 {
	public static void main(String[] args){
		Zi z1=new Zi();
		Zi z2=new Zi("23号莉莉");
	}
}
package 大数据G226_03;

class Person033{
	public Person033(){
		System.out.println("无参的构造方法被调用了。。。");
	}
	public Person033(String name){
		this();
		System.out.println("有参的构造方法被调用了。。。");
	}
	public Person033(String name,int age){
		this("aaa");
		System.out.println("两个参数的构造方法被调用了。。。");
	}
}
public class Exthis3 {
	public static void main(String[] args) {
		Person033 p=new Person033("李李",18);

	}

}

package ������G226_03;

class Fu{
	String name;
	Fu(){
		System.out.println("�����޲ι��췽���������Ա������name="+name);
	}
	Fu(String n){
		this.name=n;
		System.out.println("�����вι��췽���������Ա������name="+name);
	}
}
class Zi extends Fu{
	Zi(){
		System.out.println("�����޲ι��췽���������Ա������name="+name);
	}
	Zi(String n){
		super("��ΰ");
		name=n;
		System.out.println("�����вι��췽���������Ա������name="+name);
	}
}
public abstract class Example3_14 {
	public static void main(String[] args){
		Zi z1=new Zi();
		Zi z2=new Zi("23������");
	}
}
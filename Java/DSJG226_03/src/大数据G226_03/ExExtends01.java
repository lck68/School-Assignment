package ������G226_03;
class Animal1{
	void shout(){
		System.out.println("����ᷢ������������");
	}
}
class DogDog extends Animal1{
	void shout(){
		System.out.println("�����Ľ����ǣ���������������");
	}
}
public class ExExtends01 {
	public static void main(String[] args) {
		DogDog dog=new DogDog();
		dog.shout();
	}

}

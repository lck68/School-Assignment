package 大数据G226_03;
class Animal1{
	void shout(){
		System.out.println("动物会发出叫声！！！");
	}
}
class DogDog extends Animal1{
	void shout(){
		System.out.println("狗狗的叫声是：王博王博。。。");
	}
}
public class ExExtends01 {
	public static void main(String[] args) {
		DogDog dog=new DogDog();
		dog.shout();
	}

}

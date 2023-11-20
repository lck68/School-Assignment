#自己写的第一个py程序
print("hello world")
print("123456")
fp=open('E:/1.txt','a+')#a+的意思是如果没有就创建一个，如果有就在文档后面再加上要输出的东西
print('This is a test text.\nThank you very mach.',file=fp)
fp.close()#关上
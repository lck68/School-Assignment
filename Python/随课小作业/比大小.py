print("这是一个比大小的程序")
a=input("输入a：")
b=input("输入b：")
a=float(a)
b=float(b)
if a>b:
    print("a值比b大")
else:
    print("b值比a大")
print("他们的和为",a+b)
print("他们的差为",a-b)
print("他们的乘积为",a*b)
if a>b:
    print("大数是小数的",a/b,"倍")
else:
    print("大数是小数的",b/a,"倍")
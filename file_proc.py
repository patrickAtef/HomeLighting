import time as t
from serial_commu import com


class FRead():
    def __init__(self):
        c = com('COM3', 9600)
        while (True):
            with open(r'C:\Users\patrick\Desktop\Home_light\looping.txt', 'r') as f:
                l = f.readline(3)
                print(l)

                if l == "on":
                    c.coumu('0')
                elif l == "of":
                    c.coumu('1')
                t.sleep(5)             #test git

if __name__ == '__main__':
    y = FRead()
import serial

class com:
    def __init__(self,com,port):
        try:
            self.s = serial.Serial(com,port, timeout=1)
        except:
            print("the serial port is not connected")


    def coumu(self,st):
        self.s.write(st.encode('utf-8'))



